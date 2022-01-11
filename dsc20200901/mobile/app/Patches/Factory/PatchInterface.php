<?php
//大商创开源码版本2.5.3
namespace App\Patches\Factory;

interface PatchInterface
{
	public function updateDatabaseOptionally();

	public function updateFiles();
}


?>
