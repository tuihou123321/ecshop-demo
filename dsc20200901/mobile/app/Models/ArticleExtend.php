<?php
//大商创开源码版本2.5.3
namespace App\Models;

class ArticleExtend extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'article_extend';
	public $timestamps = false;
	protected $fillable = array('article_id', 'click', 'likenum', 'hatenum');
	protected $guarded = array();

	public function getArticleId()
	{
		return $this->article_id;
	}

	public function getClick()
	{
		return $this->click;
	}

	public function getLikenum()
	{
		return $this->likenum;
	}

	public function getHatenum()
	{
		return $this->hatenum;
	}

	public function setArticleId($value)
	{
		$this->article_id = $value;
		return $this;
	}

	public function setClick($value)
	{
		$this->click = $value;
		return $this;
	}

	public function setLikenum($value)
	{
		$this->likenum = $value;
		return $this;
	}

	public function setHatenum($value)
	{
		$this->hatenum = $value;
		return $this;
	}
}

?>
