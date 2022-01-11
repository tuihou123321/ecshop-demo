<?php
//大商创开源码版本2.5.3
namespace App\Services;

class WxappService
{
	private $WxappConfigRepository;

	public function __construct(\App\Repositories\Wechat\WxappConfigRepository $WxappConfigRepository)
	{
		$this->WxappConfigRepository = $WxappConfigRepository;
	}

	public function getWxappConfig()
	{
		return $this->WxappConfigRepository->getWxappConfig();
	}

	public function getWxappConfigByCode($code)
	{
		return $this->WxappConfigRepository->getWxappConfigByCode($code);
	}
}


?>
