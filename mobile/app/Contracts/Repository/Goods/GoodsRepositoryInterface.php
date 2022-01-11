<?php
//大商创开源码版本2.5.3
namespace App\Contracts\Repository\Goods;

interface GoodsRepositoryInterface
{
	public function create(array $data);

	public function get($id);

	public function update(array $data);

	public function delete($id);

	public function search(array $data);

	public function sku($id);

	public function skuAdd();
}


?>
