<?php
//大商创开源码版本2.5.3
namespace App\Contracts\Repositories\Brand;

interface BrandRepositoryInterface
{
	public function getAllBrands();

	public function getBrandDetail($id);
}


?>
