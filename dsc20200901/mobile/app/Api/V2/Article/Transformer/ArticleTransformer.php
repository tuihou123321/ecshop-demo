<?php
//大商创开源码版本2.5.3
namespace app\api\v2\article\transformer;

class ArticleTransformer extends \app\api\foundation\Transformer
{
	public function transform(array $map)
	{
		return array('id' => $map['article_id'], 'title' => $map['title']);
	}
}

?>
