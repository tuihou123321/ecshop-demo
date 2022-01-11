<?php
//大商创开源码版本2.5.3
namespace App\Modules\Api\Controllers\V2;

class HomeController extends \App\Modules\Api\Foundation\Controller
{
	public function actionIndex()
	{
		$this->resp(array('foo' => 'bar'));
	}
}

?>
