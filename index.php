<?php
if(isset($_GET['logout'])){
	setcookie("user",0,0);
	setcookie("key",0,0);
	setcookie("sess",0,0);
	header("location:?ref=logout");
	exit();
}
require __DIR__.'/php/login_status.php';
if($login==false){
require __DIR__.'/php/login.php';
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
<a href="?logout=<?php print rstr(64);?>">
<div class="lg">
<button>Logout</button>
</div>
</a>

<a href="adminer.php?from=<?php print rstr(64);?>">
<div class="lg">
<button>Adminer</button>
</div>
</a>
<?php
if(isset($msg[$user])){
	print $msg[$user];
}?>
		<!-- Element where elFinder will be created (REQUIRED) -->
		<div id="elfinder"></div>

	</body>
</center>
</html>