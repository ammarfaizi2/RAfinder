<?php
require __DIR__.'/helper.php';
if($login!=false){
	header("location:?ref=login_true");
	exit();
}
$basepath = $_SERVER['DOCUMENT_ROOT'].'/../';
if(isset($_POST['login'])){
require __DIR__.'/users/__data.php';
	if(isset($u[$_POST['username']]) and $_POST['password']==$u['username']){
		$key = rstr(45);
		$usr = teacrypt($_POST['username'],$key);
		$sess = rstr(64);
		stcookie(array())
	}
	
	
}
