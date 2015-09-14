<?php namespace App\Libraries;

use Aws\Common\Aws;
use Aws\Common\Credentials\Credentials;

class EmailHelper {

	public static function SendEmail($params) {
		$params = array_merge([
			'about' => '',
			'subject' => '',
			'body' => '',
			'bodyHtml' => '',
			'toAddresses' => [],
			'bccAddresses' => [],
			'replyToAddresses' => [\Config::get('app.ses_support_email')],
		], $params);
		$credentials = new Credentials(\Config::get('app.ses_key'), \Config::get('app.ses_secret'));

		$aws = Aws::factory([
			'credentials' => $credentials,
			'region' => 'us-east-1',
		]);

		$client = $aws->get('Ses');

		$result = $client->sendEmail([
			'Source' => 'Cash932<' . \Config::get('app.ses_support_email') . '>',
			'Destination' => [
				'ToAddresses' => $params['toAddresses'],
				'CcAddresses' => [],
				'BccAddresses' => $params['bccAddresses'],
			],
			'Message' => [
				'Subject' => [
					'Data' => "[" . $params['about'] . "] " . $params['subject'],
					'Charset' => 'utf8',
				],

				'Body' => [
					'Text' => [
						'Data' => $params['body'],
						'Charset' => 'utf8',
					],
					'Html' => [
						'Data' => $params['bodyHtml'],
						'Charset' => 'utf8',
					],
				],
			],
			'ReplyToAddresses' => $params['replyToAddresses'],
			'ReturnPath' => \Config::get('app.ses_support_email'),
		]);

	}
}
