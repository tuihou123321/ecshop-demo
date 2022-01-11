<?php
///大商创开源码版本2.5.3  禁止倒卖 一经发现停止任何服务
$api = app('Dingo\\Api\\Routing\\Router');
$api->version('v2', array('namespace' => 'App\\Api\\Controllers'), function($api) {
	$api->group(array('prefix' => 'wx', 'namespace' => 'Wx'), function($api) {
		$api->post('/', 'IndexController@index');
		$api->post('index', 'IndexController@index');
		$api->post('cart', 'CartController@cart');
		$api->post('cart/add', 'CartController@addGoodsToCart');
		$api->post('cart/delete', 'CartController@deleteCartGoods');
		$api->post('cart/update', 'CartController@updateCartGoods');
		$api->post('goods/list', 'GoodsController@goodsList');
		$api->post('goods/detail', 'GoodsController@goodsDetail');
		$api->post('goods/property', 'GoodsController@property');
		$api->post('goods/share', 'GoodsController@share');
		$api->post('goods/coupons', 'GoodsController@coupons');
		$api->post('goods/filtercondition', 'GoodsController@goodsFilterCondition');
		$api->post('goods/history', 'GoodsController@history');
		$api->post('goods/save', 'GoodsController@goodsSave');
		$api->post('category', 'CategoryController@index');
		$api->post('article', 'ArticleController@index');
		$api->post('article/detail', 'ArticleController@detail');
		$api->post('share', 'ShareController@index');
		$api->post('flow', 'FlowController@index');
		$api->post('flow/changecou', 'FlowController@changecou');
		$api->post('flow/down', 'FlowController@down');
		$api->post('flow/shipping', 'FlowController@shipping');
		$api->post('store', 'StoreController@index');
		$api->post('store/detail', 'StoreController@detail');
		$api->post('store/attention', 'StoreController@attention');
		$api->post('user', 'UserController@index');
		$api->post('user/login', 'UserController@login');
		$api->post('user/order/list', 'UserController@orderList');
		$api->post('user/order/detail', 'UserController@orderDetail');
		$api->post('user/order/appraise', 'UserController@orderAppraise');
		$api->post('user/order/appraise/add', 'UserController@orderAppraiseAdd');
		$api->post('user/order/appraise/detail', 'UserController@orderAppraiseDetail');
		$api->post('user/order/cancel', 'UserController@orderCancel');
		$api->post('user/order/confirm', 'UserController@orderConfirm');
		$api->post('user/address/choice', 'UserController@addressChoice');
		$api->post('user/address/list', 'UserController@addressList');
		$api->post('user/address/add', 'UserController@addressAdd');
		$api->post('user/address/detail', 'UserController@addressDetail');
		$api->post('user/address/update', 'UserController@addressUpdate');
		$api->post('user/address/delete', 'UserController@addressDelete');
		$api->post('user/invoice/add', 'UserController@invoiceAdd');
		$api->post('user/invoice/detail', 'UserController@invoiceDetail');
		$api->post('user/invoice/update', 'UserController@invoiceUpdate');
		$api->post('user/invoice/delete', 'UserController@invoiceDelete');
		$api->post('user/account', 'UserController@account');
		$api->post('user/account/detail', 'UserController@accountDetail');
		$api->post('user/account/log', 'UserController@accountLog');
		$api->post('user/account/deposit', 'UserController@deposit');
		$api->post('user/collectgoods', 'UserController@collectGoods');
		$api->post('user/collectstore', 'UserController@collectStore');
		$api->post('user/collect/add', 'UserController@collectAdd');
		$api->post('user/conpont', 'UserController@conpont');
		$api->post('user/funds', 'UserController@funds');
		$api->post('user/history', 'UserController@history');
		$api->post('region/list', 'RegionController@regionList');
		$api->post('location', 'LocationController@index');
		$api->post('location/info', 'LocationController@info');
		$api->post('location/getcity', 'LocationController@getcity');
		$api->post('location/setcity', 'LocationController@setcity');
		$api->post('location/specific', 'LocationController@specific');
		$api->post('payment/pay', 'PaymentController@pay');
		$api->post('payment/notify', 'PaymentController@notify');
		$api->post('upload', 'UserController@uploadFile');
		$api->post('bargain', 'BargainController@index');
		$api->post('bargain/list', 'BargainController@bargainList');
		$api->post('bargain/goodsDetail', 'BargainController@goodsDetail');
		$api->post('bargain/property', 'BargainController@property');
		$api->post('bargain/addBargain', 'BargainController@addBargain');
		$api->post('bargain/goBargain', 'BargainController@goBargain');
		$api->post('bargain/Bargainbuy', 'BargainController@Bargainbuy');
		$api->post('bargain/myBargain', 'BargainController@myBargain');
		$api->post('team', 'TeamController@index');
		$api->post('team/teamList', 'TeamController@teamList');
		$api->post('team/categoriesIndex', 'TeamController@categoriesIndex');
		$api->post('team/categoryList', 'TeamController@categoryList');
		$api->post('team/teamRanking', 'TeamController@teamRanking');
		$api->post('team/goodsDetail', 'TeamController@goodsDetail');
		$api->post('team/property', 'TeamController@property');
		$api->post('team/teamProperty', 'TeamController@teamProperty');
		$api->post('team/teamBuy', 'TeamController@teamBuy');
		$api->post('team/teamWait', 'TeamController@teamWait');
		$api->post('team/teamIsBest', 'TeamController@teamIsBest');
		$api->post('team/teamUser', 'TeamController@teamUser');
		$api->post('team/teamUserOrder', 'TeamController@teamUserOrder');
		$api->post('team/virtualOrder', 'TeamController@virtualOrder');
	});
	$api->group(array('prefix' => 'brand', 'namespace' => 'Brand'), function($api) {
		$api->get('brand', 'BrandController@index');
		$api->get('detail', 'BrandController@get');
	});
	$api->group(array('prefix' => 'shop', 'namespace' => 'Shop'), function($api) {
		$api->get('shop', 'ShopController@index');
	});
	$api->group(array('prefix' => 'location', 'namespace' => 'Location'), function($api) {
		$api->get('index', 'LocationController@index');
		$api->get('info', 'LocationController@info');
		$api->get('getcity', 'LocationController@getcity');
		$api->get('setcity', 'LocationController@setcity');
	});
	$api->group(array('prefix' => 'user', 'middleware' => 'api.auth'), function($api) {
		$api->resource('index', 'UserController');
		$api->resource('address', 'AddressController');
	});
});

?>