<?php
//大商创开源码版本2.5.3
return array(
	'HTML_CACHE_ON'    => false,
	'HTML_CACHE_TIME'  => 3600,
	'HTML_FILE_SUFFIX' => '.shtml',
	'HTML_CACHE_RULES' => array(
		'*' => array('{$_SERVER.REQUEST_URI|md5}')
		)
	);

?>