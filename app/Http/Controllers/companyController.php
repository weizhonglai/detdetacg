<?php namespace App\Http\Controllers;

use DB;
use Exception;
use Request;
use Session;
use App\Libraries\AuthHelper;
use App\Libraries\DatabaseUtilHelper;
use App\Libraries\EmailHelper;
use App\Libraries\LogHelper;
use App\Libraries\ResponseHelper;

use App\Models\LogPasswordReset;
use App\Models\User;
use App\Models\UserAccess;


class companyController extends Controller {

	public function registerCompany() {
		try{

			$companyName = Request::input('company_name');
			$description = Request::input('description');
			$companyEmail = Request::input('company_email');
			$companyMobile = Request::input('company_mobile');
			$companyAddress1 = Request::input('company_address1');
			$companyAddress2 = Request::input('company_address2');
			$companyPostCode = Request::input('company_post_code');
			$companyCity = Request::input('company_city');
			$companyState = Request::input('company_state');
			$companyCountry = Request::input('company_country');

			$idCounter = IdCounter::find(1);
			$codeSeed = $idCounter->game_code_seed;
			$idCounter->game_code_seed = $gameCodeSeed + 1;
			$idCounter->save();

			$companyCode = CompanyHelper::GenerateCompanyCode($codeSeed);
			
			$company = new Company;
			$company->company_name = $companyName;
			$company->description = $description;
			$company->company_email = $companyEmail;
			$company->company_mobile = $companyMobile;
			$company->company_address1 = $companyAddress1;
			$company->company_address2 = $companyAddress2;
			$company->company_post_code = $companyPostCode;
			$company->company_city = $companyCity;
			$company->company_state = $companyState;
			$company->company_country = $companyCountry;
			$company->company_code = $companyCode;
			$company->seed = $codeSeed;
			$company->save();
			
			} catch (Exception $ex) {
			LogHelper::LogToDatabase($ex->getMessage(), array('environment' => json_encode(array(
				'inputs' => Request::all(),
			))));
			return ResponseHelper::OutputJSON('exception');
		}
	}
}
