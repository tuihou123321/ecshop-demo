<?php
//大商创开源码版本2.5.3
namespace app\models;

class ExchangeGood extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'exchange_goods';
	protected $primaryKey = 'goods_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'exchange_integral', 'is_exchange', 'is_hot', 'is_best');
	protected $guarded = array();
}

?>
