<?php
//大商创开源码版本2.5.3
namespace OSS\Model;

class UploadInfo
{
	private $key = '';
	private $uploadId = '';
	private $initiated = '';

	public function __construct($key, $uploadId, $initiated)
	{
		$this->key = $key;
		$this->uploadId = $uploadId;
		$this->initiated = $initiated;
	}

	public function getKey()
	{
		return $this->key;
	}

	public function getUploadId()
	{
		return $this->uploadId;
	}

	public function getInitiated()
	{
		return $this->initiated;
	}
}


?>
