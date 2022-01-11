<?php
//大商创开源码版本2.5.3
namespace App\Notifications;

class DrpAccountChecked
{
	public function setVia($via)
	{
		if (!is_array($via)) {
			$this->via = array($via);
		}

		return $this;
	}
}


?>
