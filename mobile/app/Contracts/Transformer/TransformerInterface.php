<?php
//大商创开源码版本2.5.3
namespace app\contracts\transformer;

interface TransformerInterface
{
	public function transformCollection(array $map);

	public function transform(array $map);
}


?>
