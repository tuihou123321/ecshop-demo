<?php
//zend by 大商创开源码版本2.5.3
namespace App\Modules\Api\Foundation;

abstract class Transformer
{
	public function transformCollection(array $map)
	{
		return array_map(array($this, 'transform'), $map);
	}

	abstract public function transform(array $map);
}


?>
