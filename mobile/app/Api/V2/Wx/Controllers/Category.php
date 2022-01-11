<?php
//大商创开源码版本2.5.3
namespace app\api\v2\wx\controllers;

class Category extends \app\api\foundation\Controller
{
	private $categoryService;

	public function __construct(\app\services\CategoryService $categoryService)
	{
		parent::__construct();
		$this->categoryService = $categoryService;
	}

	public function actionIndex()
	{
		$list = $this->categoryService->categoryList();
		return $this->apiReturn(array('category' => $list));
	}
}

?>
