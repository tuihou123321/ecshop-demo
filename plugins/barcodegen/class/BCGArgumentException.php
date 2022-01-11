<?php
//大商创开源码版本2.5.3
class BCGArgumentException extends Exception
{
	protected $param;

	public function __construct($message, $param)
	{
		$this->param = $param;
		parent::__construct($message, 20000);
	}
}

?>
