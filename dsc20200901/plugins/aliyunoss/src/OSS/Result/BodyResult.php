<?php
//大商创开源码版本2.5.3
namespace OSS\Result;

class BodyResult extends Result
{
	protected function parseDataFromResponse()
	{
		return empty($this->rawResponse->body) ? '' : $this->rawResponse->body;
	}
}

?>
