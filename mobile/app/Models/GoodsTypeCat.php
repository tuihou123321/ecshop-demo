<?php
//大商创开源码版本2.5.3
namespace App\Models;

class GoodsTypeCat extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'goods_type_cat';
	protected $primaryKey = 'cat_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'parent_id', 'cat_name', 'sort_order', 'level');
	protected $guarded = array();

	public function getUserId()
	{
		return $this->user_id;
	}

	public function getParentId()
	{
		return $this->parent_id;
	}

	public function getCatName()
	{
		return $this->cat_name;
	}

	public function getSortOrder()
	{
		return $this->sort_order;
	}

	public function getLevel()
	{
		return $this->level;
	}

	public function setUserId($value)
	{
		$this->user_id = $value;
		return $this;
	}

	public function setParentId($value)
	{
		$this->parent_id = $value;
		return $this;
	}

	public function setCatName($value)
	{
		$this->cat_name = $value;
		return $this;
	}

	public function setSortOrder($value)
	{
		$this->sort_order = $value;
		return $this;
	}

	public function setLevel($value)
	{
		$this->level = $value;
		return $this;
	}
}

?>
