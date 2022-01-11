<?php
//大商创开源码版本2.5.3
namespace app\models;

class ZcGood extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'zc_goods';
	public $timestamps = false;
	protected $fillable = array('pid', 'limit', 'backer_num', 'price', 'shipping_fee', 'content', 'img', 'return_time', 'backer_list');
	protected $guarded = array();
}

?>
