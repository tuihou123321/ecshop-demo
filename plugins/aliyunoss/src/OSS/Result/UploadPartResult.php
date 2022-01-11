<?php
//大商创开源码版本2.5.3
namespace OSS\Result;

class UploadPartResult extends Result
{
	protected function parseDataFromResponse()
	{
		$header = $this->rawResponse->header;

		if (isset($header['etag'])) {
			return $header['etag'];
		}

		throw new \OSS\Core\OssException('cannot get ETag');
	}
}

?>
