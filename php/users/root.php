<?php
$opts = array(
	'debug' => true,
	'roots' => array(
		array(
			'driver'        => 'LocalFileSystem',
			'path'=>'/',
			'URL'           => '/',
			'uploadDeny'    => array(),
			'uploadAllow'   => array('all'),
			'uploadOrder'   => array('deny','allow'), 'accessControl' => 'allow' 
		)
	)
);