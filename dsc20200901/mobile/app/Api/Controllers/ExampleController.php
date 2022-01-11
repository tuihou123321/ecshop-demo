<?php
//大商创开源码版本2.5.3
namespace App\Http\Controllers;

class ExampleController extends Controller
{
	public function __construct()
	{
	}

	public function index()
	{
		return array('key' => 'example api.');
	}
}

?>
