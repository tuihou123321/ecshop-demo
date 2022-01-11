<?php
//大商创开源码版本2.5.3
namespace app\models;

class CollectGood extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'collect_goods';
	protected $primaryKey = 'rec_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'goods_id', 'add_time', 'is_attention');
	protected $guarded = array();
}

?>
