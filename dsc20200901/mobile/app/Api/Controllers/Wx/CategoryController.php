<?php
//大商创开源码版本2.5.3
namespace App\Api\Controllers\Wx;

class CategoryController extends \App\Api\Controllers\Controller
{
	private $categoryService;

	public function __construct(\App\Services\CategoryService $categoryService)
	{
		$this->categoryService = $categoryService;
	}

	public function index()
	{
		$list = $this->categoryService->categoryList();
		return $this->apiReturn($list);
	}
}

?>
