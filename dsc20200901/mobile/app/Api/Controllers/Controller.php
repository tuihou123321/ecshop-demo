<?php
//大商创开源码版本2.5.3
namespace App\Api\Controllers;

class Controller extends \Laravel\Lumen\Routing\Controller
{
	use \Dingo\Api\Routing\Helpers;

	protected function apiReturn($data, $code = 0)
	{
		return array('code' => $code, 'data' => $data);
	}
}

?>
