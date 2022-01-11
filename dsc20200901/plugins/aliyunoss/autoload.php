<?php
//大商创开源码版本2.5.3
function classLoader($class)
{
	$path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
	$file = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $path . '.php';

	if (file_exists($file)) {
		require_once $file;
	}
}

spl_autoload_register('classLoader');

?>
