<?php
//大商创开源码版本2.5.3
namespace App\Console;

class Kernel extends \Laravel\Lumen\Console\Kernel
{
	/**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
	protected $commands = array('App\\Console\\Commands\\CustomerService', 'App\\Console\\Commands\\ProjectRelease', 'App\\Console\\Commands\\RestoreController', 'App\\Console\\Commands\\RestoreModels');

	protected function schedule(\Illuminate\Console\Scheduling\Schedule $schedule)
	{
	}
}

?>
