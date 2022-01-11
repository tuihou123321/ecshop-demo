<?php
//大商创开源码版本2.5.3
namespace app\models;

class RegField extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'reg_fields';
	public $timestamps = false;
	protected $fillable = array('reg_field_name', 'dis_order', 'display', 'type', 'is_need');
	protected $guarded = array();
}

?>
