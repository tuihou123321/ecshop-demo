<?php
//大商创开源码版本2.5.3
namespace OSS\Model;

interface XmlConfig
{
	public function parseFromXml($strXml);

	public function serializeToXml();
}


?>
