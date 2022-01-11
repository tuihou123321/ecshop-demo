<?php
//zend by 大商创开源码版本2.5.3
namespace App\Modules\Api\Transformers;

class BrandTransformer
{
	public function transform(array $map)
	{
		return array('id' => $map['article_id'], 'title' => $map['title']);
	}
}


?>
