<?php
//大商创开源码版本2.5.3
class AppipGetRequest
{
	private $apiParas = array();

	public function getApiMethodName()
	{
		return 'taobao.appip.get';
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{
	}

	public function putOtherTextParam($key, $value)
	{
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}


?>