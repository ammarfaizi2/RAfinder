<?php
if(!function_exists('teacrypt')){
	function teacrypt($str,$key="1111aaaa")
	{
		return strrev(base64_encode(gzdeflate(Teacrypt::sgr21cr($str,$key))));
	}
}
if(!function_exists('teadecrypt')){
	function teadecrypt($str,$key="1111aaaa")
	{
		return Teacrypt::sgr21dr(gzinflate(base64_decode(strrev($str))),$key);
	}
}
if(!function_exists('stcookie')){
	function stcookie($ck,$ev='+')
	{
		$tm = time();
		foreach($ck as $key => $val){
			$aa[] = setcookie($key,$val[0],($ev=="+"?$tm+$val[1]:$tm-$val[1]));
		}
		return $aa;
	}
}
if(!function_exists('clrcookie')){
	function clrcookie($exception=null)
	{
		$except = $exception===null?array():explode(',');
		foreach($_COOKIE as $key => $val){
			if(!in_array($key,$except)){
				$aa[]=setcookie($key,null,0);
			}
		}
		return $aa;
	}
}
if(!function_exists('rstr')){
	function rstr($n=32,$a="",$b=null){
		$str = $b===null?"qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789___".$a:$b;$rt = '';
		$len = strlen($str)-1;
		for($i=0;$i<$n;$i++){
			$rt.=$str[rand(0,$len)];
		}
		return $rt;
	}
}