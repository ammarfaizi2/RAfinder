<?php
$opts = array(
	'debug' => true,
	'roots' => array(
		array(
			'driver'        => 'LocalFileSystem',
			'path'=>$_SERVER['DOCUMENT_ROOT'].'/../estehsegar.cf',
			'URL'           => 'https://www.estehsegar.cf/',
			'uploadDeny'    => array(),
			'uploadAllow'   => array('all'),
			'uploadOrder'   => array('deny','allow'), 'accessControl' => 'allow' 
		)
	)
);