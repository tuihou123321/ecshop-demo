<?php
//大商创开源码版本2.5.3
namespace App\Models;

class Migrations extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'migrations';
	public $timestamps = false;
	protected $fillable = array('migration', 'batch');
	protected $guarded = array();
}

?>
