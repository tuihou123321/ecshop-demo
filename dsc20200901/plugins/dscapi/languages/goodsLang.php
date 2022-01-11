<?php
//zend 大商创开源码版本2.5.3  禁止倒卖 一经发现停止任何服务
namespace languages;

class goodsLang
{
	static private $lang_update_conf;
	static private $lang_insert_conf;

	public function __construct()
	{
	}

	static public function lang_goods_request()
	{
		self::$lang_insert_conf = array(
			'msg_success'   => array('success' => '成功获取数据', 'error' => 0),
			'msg_failure'   => array('failure' => '数据为空值', 'error' => 1),
			'where_failure' => array('failure' => '条件为空', 'error' => 2)
			);
		return self::$lang_insert_conf;
	}

	static public function lang_goods_insert()
	{
		self::$lang_insert_conf = array(
			'msg_success' => array('success' => '数据提交成功', 'error' => 0),
			'msg_failure' => array('failure' => '数据提交失败', 'error' => 1)
			);
		return self::$lang_insert_conf;
	}

	static public function lang_goods_update()
	{
		self::$lang_update_conf = array(
			'msg_success'   => array('success' => '数据更新成功', 'error' => 0),
			'msg_failure'   => array('failure' => '数据为空', 'error' => 1),
			'where_failure' => array('failure' => '条件为空', 'error' => 2),
			'null_failure'  => array('failure' => '数据不存在', 'error' => 4)
			);
		return self::$lang_update_conf;
	}

	static public function lang_goods_delete()
	{
		self::$lang_update_conf = array(
			'msg_success'   => array('success' => '删除成功', 'error' => 0),
			'msg_failure'   => array('failure' => '删除失败', 'error' => 1),
			'where_failure' => array('failure' => '条件为空', 'error' => 2)
			);
		return self::$lang_update_conf;
	}

	static public function lang_goods_batch_insert()
	{
		self::$lang_insert_conf = array(
			'msg_success' => array('code' => '10000', 'message' => '成功'),
			'msg_failure' => array('code' => '23602', 'message' => '推送失败，缺失必要参数')
			);
		return self::$lang_insert_conf;
	}

	static public function __callStatic($method, $arguments)
	{
		return call_user_func_array(array(self, $method), $arguments);
	}
}


?>