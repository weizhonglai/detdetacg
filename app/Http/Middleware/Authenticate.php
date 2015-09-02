<?php namespace App\Http\Middleware;

use App\Libraries\ResponseHelper;
use App\Models\User;
use App\Models\UserAccess;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Redirect;
use Request;
use Session;

class Authenticate {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth) {
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		$isApi = (strpos($request->path(), 'api/') !== FALSE);

		$accessToken = false;
		$accessToken = (!$accessToken) ? Request::header('X-access-token') : $accessToken;
		$accessToken = (!$accessToken) ? Request::cookie('access_token') : $accessToken;
		$accessToken = (!$accessToken) ? Session::get('access_token') : $accessToken;
		if (!$accessToken) {
			if ($isApi) {
				return ResponseHelper::OutputJSON('fail', 'missing access token');
			} else {
				return redirect('/sign-in?missing-access-token');
			}
		}

		$userAccess = UserAccess::where('access_token', $accessToken)->whereRaw('access_token_expired_at > NOW()')->first();
		if (!$userAccess) {
			if ($isApi) {
				return ResponseHelper::OutputJSON('fail', 'invalid access token');
			} else {
				return redirect('/sign-in?invalid-access-token');
			}
		}

		$user = User::find($userAccess->user_id);
		if (!$user) {
			if ($isApi) {
				return ResponseHelper::OutputJSON('fail', 'user not found: ' . $userAccess->user_id);
			} else {
				return redirect('/sign-in');
			}
		}

		$inputs = Request::all();
		$inputs['user_id'] = $user->id;
		$inputs['user_name'] = $user->name;

		Request::replace($inputs);

		return $next($request);
	}

}
