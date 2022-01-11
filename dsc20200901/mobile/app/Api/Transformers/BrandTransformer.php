<?php
//大商创开源码版本2.5.3
namespace App\Api\Transformers;

class BrandTransformer extends \League\Fractal\TransformerAbstract
{
	public function transform(array $map)
	{
		return array('id' => $map['article_id'], 'title' => $map['title']);
	}
}

?>
