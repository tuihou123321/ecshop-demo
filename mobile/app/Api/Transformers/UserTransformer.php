<?php
//大商创开源码版本2.5.3
namespace App\Api\Transformers;

class UserTransformer extends \League\Fractal\TransformerAbstract
{
	public function transform(\App\Models\Users $user)
	{
		return array('id' => $user->user_id, 'name' => $user->user_name);
	}
}

?>
