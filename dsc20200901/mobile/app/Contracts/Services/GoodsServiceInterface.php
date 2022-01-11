<?php
//大商创开源码版本2.5.3
namespace App\Contracts\Services;

interface GoodsServiceInterface
{
	public function create();

	public function get();

	public function update();

	public function delete();

	public function listing();

	public function delisting();

	public function search();

	public function getInventory();

	public function getOnsale();
}


?>
