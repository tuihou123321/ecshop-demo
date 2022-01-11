<?php
//大商创开源码版本2.5.3
namespace app\models;

class Cron extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'crons';
	protected $primaryKey = 'cron_id';
	public $timestamps = false;
	protected $fillable = array('cron_code', 'cron_name', 'cron_desc', 'cron_order', 'cron_config', 'thistime', 'nextime', 'day', 'week', 'hour', 'minute', 'enable', 'run_once', 'allow_ip', 'alow_files');
	protected $guarded = array();
}

?>
