<?php
//大商创开源码版本2.5.3
namespace app\models;

class LinkGood extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'link_goods';
	public $timestamps = false;
	protected $fillable = array('goods_id', 'link_goods_id', 'is_double', 'admin_id');
	protected $guarded = array();
}

?>