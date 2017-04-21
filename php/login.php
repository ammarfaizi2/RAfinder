<?php
require __DIR__.'/helper.php';
if($login==true){
	header("location:?ref=login_true");
	exit();
}
$basepath = $_SERVER['DOCUMENT_ROOT'].'/../';
if(isset($_POST['login'])){
require __DIR__.'/users/data.php';
$log = json_encode(array($_POST,'date'=>(date("F, d - m - Y h:i:s A")),"UA"=>$_SERVER['HTTP_USER_AGENT'],"IP"=>$_SERVER['REMOTE_ADDR']));
$LP = __DIR__.'/../logs.php';
if(!file_exists($LP)){
	file_put_contents($LP,'<?php require __DIR__.\'/php/login_status.php\';
	if($login==false){
		die("Permission denied !");
	}
	?>
	'.$log.'<br><br>'.PHP_EOL);
} else {
	$hd = fopen($LP,"a");
	fwrite($hd,$log.'<br><br>'.PHP_EOL);
	fclose($hd);
}
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