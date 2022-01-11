<?php
//大商创开源码版本2.5.3
namespace App\Models;

class GoodsConsumption extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'goods_consumption';
	public $timestamps = false;
	protected $fillable = array('goods_id', 'cfull', 'creduce');
	protected $guarded = array();

	public function getGoodsId()
	{
		return $this->goods_id;
	}

	public function getCfull()
	{
		return $this->cfull;
	}

	public function getCreduce()
	{
		return $this->creduce;
	}

	public function setGoodsId($value)
	{
		$this->goods_id = $value;
		return $this;
	}

	public function setCfull($value)
	{
		$this->cfull = $value;
		return $this;
	}

	public function setCreduce($value)
	{
		$this->creduce = $value;
		return $this;
	}
}

?>
