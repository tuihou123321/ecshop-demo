<?php
//大商创开源码版本2.5.3
namespace app\api\v2\shop\transformer;

class ShopTransformer extends \App\Api\Foundation\Transformer
{
	public function transform(array $map)
	{
		return array('id' => $map['article_id'], 'title' => $map['title']);
	}
}

?>
