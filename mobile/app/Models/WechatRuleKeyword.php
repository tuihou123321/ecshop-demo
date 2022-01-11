<?php
//大商创开源码版本2.5.3
namespace app\models;

class WechatRuleKeyword extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat_rule_keywords';
	public $timestamps = false;
	protected $fillable = array('rid', 'rule_keywords');
	protected $guarded = array();
}

?>
