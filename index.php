<?php
if(isset($_GET['logout'])){
	$logout = '.sess/'.trim($_GET['logout']);
	file_exists($logout) and unlink($logout) xor
	header("location:?ref=auth&act=logout");
	exit('aaa');
}
require 'php/login_status.php';
if($login===false){
if(isset($_POST['login'],$_POST['username'],$_POST['password'])){
	if(!is_dir('.sess')){
		mkdir('.sess');
	}
if($_POST['username']=='ammarfaizi2' and $_POST['password']=='triosemut123'){		file_put_contents('.sess/'.$hash,$info);
header("location:?auth=true");
	} else {
header("location:?auth=false");
	}
exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
<style>
.btn	
{
	margin-top:5%;
}		
.il
{
	margin-top:5%;
}
</style>
	</head>
<body>
<center>
<form action="<?php print $_SERVER['PHP_SELF'];?>" method="post">
<div>

<div class="il">
<label>Username</label><br>
<input type="text" name="username">
</div>

<div class="il">
<label>Password</label><br>
<input type="password" name="password">
</div>

<div class="btn">
<input type="submit" name="login" value="Login">
</div>
</div>
</form>
</center>
</body>
</html>
<?php
exit();
} 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>elFinder 2.1.x source version with PHP connector</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />

		<!-- Require JS (REQUIRED) -->
		<!-- Rename "main.default.js" to "main.js" and edit it if you need configure elFInder options or any things -->
		<script data-main="./main.default.js" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.3.2/require.min.js"></script>
<style>
.lg
{
	margin:5%;
	background-color:red;
	width:40%;
	height:35%;
	padding-bottom:2%;
	padding-top:1%;
}
</style>
	</head>
	<body>
<center>
<a href="?logout=<?php print $hash;?>">
<div class="lg">
<button>Logout</button>
</div>
</a>
		<!-- Element where elFinder will be created (REQUIRED) -->
		<div id="elfinder"></div>

	</body>
</center>
</html>