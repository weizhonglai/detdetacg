<?php namespace App\Libraries;

class CompanyHelper {
	
	public static function GenerateCompanyCode($seed)
	{
		$seed = intval($seed);

		$n1 = (floor($seed / pow(36, 6))) % 36;
		$n2 = (floor($seed / pow(36, 5))) % 36;
		$n3 = (floor($seed / pow(36, 4))) % 36;
		$n4 = (floor($seed / pow(36, 3))) % 36;
		$n5 = (floor($seed / pow(36, 2))) % 36;
		$n6 = (floor($seed / pow(36, 1))) % 36;
		$n7 = (floor($seed / pow(36, 0))) % 36;

		$oddSum = ($n1 + $n3 + $n5 + $n7) * 3;
		$evenSum = ($n2 + $n4 + $n6);
		$checkDigit = 36 - (($oddSum + $evenSum) % 36);
		$checkDigit = $checkDigit % 36;

		$c1 = ($n1 < 10)?$n1:chr($n1 + 87);
		$c2 = ($n2 < 10)?$n2:chr($n2 + 87);
		$c3 = ($n3 < 10)?$n3:chr($n3 + 87);
		$c4 = ($n4 < 10)?$n4:chr($n4 + 87);
		$c5 = ($n5 < 10)?$n5:chr($n5 + 87);
		$c6 = ($n6 < 10)?$n6:chr($n6 + 87);
		$c7 = ($n7 < 10)?$n7:chr($n7 + 87);
		$c8 = ($checkDigit < 10)?$checkDigit:chr($checkDigit + 87);

		return $c1.$c2.$c3.$c4.$c5.$c6.$c7.$c8;

	}

}