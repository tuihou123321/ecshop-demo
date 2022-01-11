<?php
//大商创开源码版本2.5.3
namespace App\Contracts\Repository\Article;

interface ArticleRepositoryInterface
{
	public function all($cat_id, $columns, $offset, $requirement);

	public function detail($id);

	public function create($data);

	public function update($data);

	public function delete($id);
}


?>
