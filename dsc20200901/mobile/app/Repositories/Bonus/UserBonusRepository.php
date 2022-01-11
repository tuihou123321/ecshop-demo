<?php
//大商创开源码版本2.5.3
namespace App\Repositories\Bonus;

class UserBonusRepository implements \App\Contracts\Repositories\Bonus\UserBonusRepositoryInterface
{
	public function getUserBonusCount($userId)
	{
		return \App\Models\UserBonus::where('user_id', $userId)->count();
	}
}

?>
