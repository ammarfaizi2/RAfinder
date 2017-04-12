<?php
require 'php/Teacrypt.php';
is_dir('.sess') or mkdir('.sess');
$hash = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);
if(file_exists('.sess/'.$hash)){
	$a = json_decode(file_get_contents('.sess/'.$hash),true);
	$a = isset($a['key'])? Teacrypt::sgr21dr($a['key'],"triosemut123"):false;
	$key = file_exists('.sess/key')?Teacrypt::sgr21dr(file_get_contents('.sess/key'),"triosemut123"):false;
	if($a==$key){
		$login = true;
	} else {
		$login = false;
	}
} else {
	$login = false;
}	

if($login===false){
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

	</head>
	<body>

		<!-- Element where elFinder will be created (REQUIRED) -->
		<div id="elfinder"></div>

	</body>
</html>