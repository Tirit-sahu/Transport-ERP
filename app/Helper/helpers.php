<?php 
use App\Admin\LoadingEntry;
use App\Admin\LoadingPayment;

class Helpers {
	 public static function hi()
	 {
	 	return "hello world";
	 }


	public  static function getcode()
	{ 
		$num = LoadingEntry::max('loading_no');
		
	++$num; // add 1;
	$len = strlen($num);
	for($i=$len; $i< 5; ++$i) {
	$num = '0'.$num;
	}
	return $num;
	}

	public  static function getinvoice()
	{ 
		$num = LoadingPayment::max('invoice_no');
		
	++$num; // add 1;
	$len = strlen($num);
	for($i=$len; $i< 5; ++$i) {
	$num = '0'.$num;
	}
	return $num;
	}

}

?>