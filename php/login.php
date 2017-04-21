<?php
require __DIR__.'/helper.php';
if($login==true){
	header("location:?ref=login_true");
	exit();
}
$basepath = $_SERVER['DOCUMENT_ROOT'].'/../';
if(isset($_POST['login'])){
require __DIR__.'/users/__data.php';
	if(isset($u[$_POST['username']]) and $_POST['password']==$u[$_POST['username']]){
		$key = rstr(45);
		$usr = teacrypt($_POST['username'],$key);
		$sess = rstr(64);
		$exp = 3600*24*14;
		stcookie(array(
			'user'=>array($usr,$exp),
			'key'=>array($key,$exp),
			'sess'=>array($sess,$exp),
		));
		header("location:?ref=login_success");
		exit("Login success !");
	} else {
		header("location:?ref=login_failed");
		exit("Login Failed !");
	}
}