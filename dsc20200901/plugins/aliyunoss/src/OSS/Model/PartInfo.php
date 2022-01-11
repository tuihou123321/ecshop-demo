<?php
//大商创开源码版本2.5.3
namespace OSS\Model;

class PartInfo
{
	private $partNumber = 0;
	private $lastModified = '';
	private $eTag = '';
	private $size = 0;

	public function __construct($partNumber, $lastModified, $eTag, $size)
	{
		$this->partNumber = $partNumber;
		$this->lastModified = $lastModified;
		$this->eTag = $eTag;
		$this->size = $size;
	}

	public function getPartNumber()
	{
		return $this->partNumber;
	}

	public function getLastModified()
	{
		return $this->lastModified;
	}

	public function getETag()
	{
		return $this->eTag;
	}

	public function getSize()
	{
		return $this->size;
	}
}


?>
