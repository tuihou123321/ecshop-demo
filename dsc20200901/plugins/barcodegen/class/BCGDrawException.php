<?php
//大商创开源码版本2.5.3
class BCGDrawException extends Exception
{
	public function __construct($message)
	{
		parent::__construct($message, 30000);
	}
}

?>
