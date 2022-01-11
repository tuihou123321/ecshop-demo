<?php
//大商创开源码版本2.5.3
namespace App\Repositories\Comment;

class CommentRepository implements \App\Contracts\Repositories\Comment\CommentRepositoryInterface
{
	public function orderAppraiseAdd($args)
	{
		$commemt = new \App\Models\Comment();

		foreach ($args as $k => $v) {
			$commemt->$k = $v;
		}

		return $commemt->save();
	}
}

?>
