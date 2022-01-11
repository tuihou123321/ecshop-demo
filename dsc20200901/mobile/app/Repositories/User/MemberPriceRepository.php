<?php
//大商创开源码版本2.5.3
namespace App\Repositories\User;

class MemberPriceRepository implements \App\Contracts\Repositories\User\MemberPriceRepositoryInterface
{
	public function getMemberPriceByUid($rank, $goods_id)
	{
		$price = \App\Models\MemberPrice::where('user_rank', $rank)->where('goods_id', $goods_id)->pluck('user_price')->toArray();

		if (!empty($price)) {
			$price = $price[0];
		}

		return $price;
	}
}

?>
