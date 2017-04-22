<?php
$opts = array(
	'debug' => true,
	'roots' => array(
		array(
			'driver'        => 'LocalFileSystem',
			'path'=>$_SERVER['DOCUMENT_ROOT'].'/../scriptol.ml',
			'URL'           => 'http://www.scriptol.ml',
			'uploadDeny'    => array(),
			'uploadAllow'   => array('all'),
			'uploadOrder'   => array('deny','allow'), 'accessControl' => 'allow' 
		)
	)
);