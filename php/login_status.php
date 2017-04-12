<?php
$info = json_encode(array(
'ip'=>$_SERVER['REMOTE_ADDR'],
'ua'=>$_SERVER['HTTP_USER_AGENT'],
'tm'=>md5(date('Y-m-d'))
));
$hash = md5($info);
require 'Teacrypt.php';
if(file_exists(__DIR__.'/../.sess/'.$hash)){
	$a = md5(file_get_contents(__DIR__.'/../.sess/'.md5($info)));
	$login = $a==$hash?true:false;
} else {
	$login = false;
}