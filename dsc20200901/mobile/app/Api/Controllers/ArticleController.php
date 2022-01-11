<?php
//大商创开源码版本2.5.3
namespace App\Api\Controllers;

class ArticleController extends Controller
{
	public function index()
	{
		$article = \App\Models\Article::all();
		return $this->collection($article, new ArticleTransformer());
	}
}

?>