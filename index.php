<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	require_once './sendRequest.php';
	
	//$url = "http://ex.dev";
	$url = 'http://ex.dev';
	
	$headers = [
		'Host: exxx.dev',
		'Connection: keep-alive',
		'Cache-Control: max-age=0',
		'Upgrade-Insecure-Requests: 1',
		'User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0',
		'Accept: */*',
		'Referer: ex.dev',
	];
	
	
	$x =	(new SendRequest($url))->headers($headers)->post(['asd' => '123', 'sss' => ['as' =>'11', 'd' => '22'] ] );
	
	
	print_r($x);

?>

