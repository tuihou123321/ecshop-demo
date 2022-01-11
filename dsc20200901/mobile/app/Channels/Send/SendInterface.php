<?php
//大商创开源码版本2.5.3
namespace App\Channels\Send;

interface SendInterface
{
	public function __construct($config);

	public function push($to, $title, $content, $data = array());

	public function getError();
}


?>
