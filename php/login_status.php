<?php 
require __DIR__.'/helper.php';

if(isset($_COOKIE['user'],$_COOKIE['key'],$_COOKIE['sess']))
{
	$user = teadecrypt($_COOKIE['user'],$_COOKIE['key']);
	$login = $user==""?false:true;
} else {
	$login = false;
}