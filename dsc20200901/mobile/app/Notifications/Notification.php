<?php
//大商创开源码版本2.5.3
namespace App\Notifications;

abstract class Notification
{
	protected $via = array();

	public function send()
	{
		foreach ($this->via as $via) {
		}
	}
}


?>
