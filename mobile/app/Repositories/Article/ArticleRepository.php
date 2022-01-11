<?php
///大商创开源码版本2.5.3  禁止倒卖 一经发现停止任何服务
namespace App\Repositories\Article;

class ArticleRepository implements \App\Contracts\Repositories\Article\ArticleRepositoryInterface
{
	public function all($cat_id, $columns = array('*'), $page, $size)
	{
		$current = ($page - 1) * $size;
		$article = \App\Models\Article::where('is_open', '=', 1);

		if ($cat_id == '-1') {
			$article = $article->where('cat_id', '>', 0);
		}
		else {
			$article = $article->where('cat_id', $cat_id);
		}

		$article = $article->offset($current)->limit($size)->orderBy('sort_order', 'ASC')->orderBy('add_time', 'DESC')->get()->toArray();
		return $article;
	}

	public function detail($id)
	{
		if (is_array($id)) {
			$field = key($id);
			$value = $id[$field];
			$model = \App\Models\Article::where($field, '=', $value)->first();
		}
		else {
			$model = \App\Models\Article::find($id);
		}

		if (is_null($model)) {
			return false;
		}

		$article = $model->toArray();

		if (is_null($model->extend)) {
			$data = array('article_id' => $model->article_id, 'click' => 1, 'likenum' => 0, 'hatenum' => 0);
			\App\Models\ArticleExtend::create($data);
		}
		else {
			$data = $model->extend->toArray();
			unset($data['id']);
		}

		$article = array_merge($article, $data);

		foreach ($model->comment as $vo) {
			$model->comment->push($vo->user);
		}

		$article['comment'] = $model->comment->where('id_value', '=', $id)->where('status', '=', 1)->toArray();
		$article['goods'] = $model->goods->toArray();
		return $article;
	}

	public function create($data)
	{
		return false;
	}

	public function update($data)
	{
		return false;
	}

	public function delete($id)
	{
		return false;
	}
}

?>
