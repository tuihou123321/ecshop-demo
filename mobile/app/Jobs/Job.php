<?php
//大商创开源码版本2.5.3
namespace App\Jobs;

abstract class Job implements \Illuminate\Contracts\Queue\ShouldQueue
{
	use \Illuminate\Queue\InteractsWithQueue, \Illuminate\Bus\Queueable, \Illuminate\Queue\SerializesModels;
}

?>
