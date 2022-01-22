<?php

/**
 * ECSHOP 购物流程相关语言
 * ============================================================================
 * * 版权所有 2005-2017 上海商创网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecmoban.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: shopping_flow.php 17217 2011-01-19 06:29:08Z liubo $
*/

$_LANG['flow_surplus_pay'] = "ショッピングプロセスは正常であり、アカウント残高は、注文を支払う";

$_LANG['bt_noll_impower'] = "申し訳ありませんが、あなたは個人的なクレジットを支払うために使用する権限を与えられていません！";
$_LANG['bt_noll_balance'] = "ごめんなさい、あなたの個人的な信用限度は不十分です！";
$_LANG['bt_go_refund'] = "返済する";
$_LANG['bt_forbid_pay'] = "あなたは割賦支払いを延滞している。ご注文は禁止されております。最初に返済してください！";
$_LANG['bt_overdue'] = "您有过期未付清的会员白条款额,您已被禁止下单,请先付清欠款";

$_LANG['order_placed_sms'] = 'あなたは新しい注文を，受取人：%s 電話番号：%s'; //互亿短信

//ecmoban模板堂 --zhuo start
$_LANG['group_stock_insufficiency'] = "非常抱歉，您选择的商品 %s 的套餐数量只有 %d 件，您最多只能购买 %d 件。";
//ecmoban模板堂 --zhuo end

$_LANG['flow_login_register']['username_not_null'] = 'どうぞIDを入力します。';
$_LANG['flow_login_register']['username_invalid'] = '入力Idは無効です。';
$_LANG['flow_login_register']['password_not_null'] = 'パスワードを入力して下さい。';
$_LANG['flow_login_register']['email_not_null'] = 'どうぞEmailを入力します。';
$_LANG['flow_login_register']['email_invalid'] = '入力Email誤り。';
$_LANG['flow_login_register']['password_not_same'] = '2回の入力のパスワードは異なります。';
$_LANG['flow_login_register']['password_lt_six'] = 'パスワードは6つの数字より小さいことができません。';

$_LANG['regist_success'] = "あなたをおめでとうございます，%s アカウントは登録することに成功します!";
$_LANG['login_success'] = 'お祝い！あなたはすでにみごとにログインしました！';

/* 购物车 */
$_LANG['update_cart'] = '改正数量を確認する';
$_LANG['back_to_cart'] = '戻ります';
$_LANG['update_cart_notice'] = '更新することに成功します、どうぞ再び需要を選ぶ贈り物。';
$_LANG['direct_shopping'] = '会員登録せずに購入';
$_LANG['goods_not_exists'] = '申し訳ありません、指定する商品は存在しません!';
$_LANG['drop_goods_confirm'] = 'この商品がいらないことを確定しますか？？';
$_LANG['goods_number_not_int'] = '正しい商品数量を入力して下さい。';
$_LANG['stock_insufficiency'] = '大変申し訳ございません，あなたの選択の商品 %s の在庫の数量ただ %d，あなたは最多で買うことしかできません %d 件。';
$_LANG['package_stock_insufficiency'] = '大変申し訳ございません，您選擇的超值禮包數量已經超出庫存。請您減少購買量或聯繫商家。';
$_LANG['shopping_flow'] = '注文の方法';
$_LANG['username_exists'] = '入力のハンドル名はすでに存在しました、その他を替えて下さい!。';
$_LANG['email_exists'] = '入力Emailはすでに存在しました、その他を替えて下さい!';
$_LANG['surplus_not_enough'] = '使う残高の既存を上回ることができない残高。';
$_LANG['integral_not_enough'] = '您使用的積分不能超過您現有的積分。';
$_LANG['integral_too_much'] = "您使用的積分不能超過%d";
$_LANG['invalid_bonus'] = '代金券暗証番号は存在しません！';
$_LANG['invalid_value_card'] = "選択した格納された値カードは存在しません。";
$_LANG['not_submit_order'] = "您参与本次团购商品的订单已提交，请勿重复操作！";
$_LANG['pay_success'] = '今回は支払ってすでに成功しました、本社はできるだけ早く出荷する。';
$_LANG['pay_fail'] = '今回は失敗を支払います、どうぞEmailは連絡します。';
$_LANG['pay_disabled'] = '選択して使用する支払方法はすでに使うことを停止しました。';
$_LANG['pay_invalid'] = '無効な支払方法。この支払方法は存在しないであるいはすでに使用を停止されました、どうぞ直ちにEmail連絡。';
$_LANG['flow_no_shipping'] = "あなたは必ず１つの配送方式を選ばなければなりません。";
$_LANG['flow_no_payment'] = '必ず１つの支払方法を選定しなければなりません。';
$_LANG['pay_not_exist'] = '選択して使用する支払方法は存在しません。';
$_LANG['storage_short'] = '在庫不足';
$_LANG['subtotal'] = '小計';
$_LANG['accessories'] = '配件';
$_LANG['largess'] = '贈品';
$_LANG['shopping_money'] = "商品代金 %s ";
$_LANG['than_market_price'] = '比市場價 %s 節省了 %s (%s)';
$_LANG['your_discount'] = '根據優惠活動<a href="activity.php"><font color=red>%s</font></a>，您可以享受折扣 %s';
$_LANG['no'] = '無';
$_LANG['not_support_virtual_goods'] = '購物車中存在非實體商品,不支持匿名購買,請登陸後在購買';
$_LANG['not_support_insure'] = '保険料がありません';
$_LANG['clear_cart'] = 'すべての注文の商品を削除します';
$_LANG['drop_to_collect'] = '放入收藏夹';
$_LANG['password_js']['show_div_text'] = '｢改正数量を確認する｣のボタンをクリックしてください。';
$_LANG['password_js']['show_div_exit'] = '關閉';
$_LANG['goods_fittings'] = '入れて追加します';
$_LANG['parent_name'] = '関連している商品：';
$_LANG['remark_package'] = '禮包';

/* 优惠活动 */
$_LANG['favourable_name'] = '活動名稱：';
$_LANG['favourable_period'] = '優惠期限：';
$_LANG['favourable_range'] = '優惠範圍：';
$_LANG['far_ext'][FAR_ALL] = 'すべての商品';
$_LANG['far_ext'][FAR_BRAND] = '以下品牌';
$_LANG['far_ext'][FAR_CATEGORY] = '以下の分類';
$_LANG['far_ext'][FAR_GOODS] = '以下の商品';
$_LANG['favourable_amount'] = '金額區間：';
$_LANG['favourable_type'] = '優惠方式：';
$_LANG['fat_ext'][FAT_DISCOUNT] = '享受 %d%% 的折扣';
$_LANG['fat_ext'][FAT_GOODS] = '從下面的贈品（特惠品）中選擇 %d 個（0表示不限制數量）';
$_LANG['fat_ext'][FAT_PRICE] = '直接現金を減らします %d';

$_LANG['favourable_not_exist'] = '您要加入購物車的優惠活動不存在';
$_LANG['favourable_not_available'] = '您不能享受該優惠';
$_LANG['favourable_used'] = '該優惠活動已加入購物車了';
$_LANG['pls_select_gift'] = '請選擇贈品（特惠品）';
$_LANG['gift_count_exceed'] = '您選擇的贈品（特惠品）數量超過上限了';
$_LANG['gift_in_cart'] = '您選擇的贈品（特惠品）已經在購物車中了：%s';
$_LANG['label_favourable'] = '优惠活动';
$_LANG['label_collection'] = '私の追加';
$_LANG['collect_to_flow'] = '直ちに買います';

/* 登录注册 */
$_LANG['forthwith_login'] = '登錄';
$_LANG['forthwith_register'] = "新規登録（無料）";
$_LANG['signin_failed'] = "申し訳ありません、失敗を登録します、どうぞ会員IDとパスワードを検査するのは正しいかどうか";
$_LANG['gift_remainder'] = '説明：登録するか登録した後で、どうぞ再び贈り物を選びます。';

/* 收货人信息 */
$_LANG['flow_js']['consignee_not_null'] = '荷受人の姓名は必要です！';
$_LANG['flow_js']['country_not_null'] = 'どうぞ荷受人のありか地区を選びます！';
$_LANG['flow_js']['province_not_null'] = 'どうぞ荷受人のありか国家を選びます！';
$_LANG['flow_js']['city_not_null'] = '請您選擇收貨人所在城市！';
$_LANG['flow_js']['district_not_null'] = '請您選擇收貨人所在區域！';
$_LANG['flow_js']['invalid_email'] = '入力Emailは正しくありません。';
$_LANG['flow_js']['address_not_null'] = "荷受人の詳しい住所は必要です！";
$_LANG['flow_js']['tele_not_null'] = "電話番号は必要です！";
$_LANG['flow_js']['shipping_not_null'] = "どうぞ配送方式を選びます！";
$_LANG['flow_js']['payment_not_null'] = 'どうぞ支払方法を選びます！';
$_LANG['flow_js']['goodsattr_style'] = 1;
$_LANG['flow_js']['tele_invaild'] = "電話番号(半角)の数字";
$_LANG['flow_js']['zip_not_num'] = "郵便番号どうぞ(半角)を書き込む数字";
$_LANG['flow_js']['mobile_invaild'] = "携帯電話の番号どうぞ(半角)を書き込む数字";

$_LANG['new_consignee_address'] = '新しく商品を受け取る住所';
$_LANG['consignee_address'] = '配送する住所';
$_LANG['consignee_name'] = "お名前(漢字)";
$_LANG['country_province'] = '配送する地区';
$_LANG['please_select'] = '選んで下さい';
$_LANG['city_district'] = '都市/地区';
$_LANG['email_address'] = 'Email';
$_LANG['detailed_address'] = "ご住所";
$_LANG['postalcode'] = "郵便番号";
$_LANG['phone'] = "電話(携帯)番号";
$_LANG['mobile'] = "携帯電話";
$_LANG['backup_phone'] = "携帯電話";
$_LANG['sign_building'] = '標誌建築';
$_LANG['deliver_goods_time'] = "最も良い配達日時：";
$_LANG['default'] = '黙認します';
$_LANG['default_address'] = '住所を黙認します';
$_LANG['confirm_submit'] = '提出を確認します';
$_LANG['confirm_edit'] = '確認する改正';
$_LANG['country'] = '國家';
$_LANG['province'] = '省';
$_LANG['city'] = '都市';
$_LANG['area'] = '所属地区';
$_LANG['consignee_add'] = '新しく配送する住所を添加します';
$_LANG['shipping_address'] = 'この住所を配送します';
$_LANG['address_amount'] = '商品を受け取る住所は最多で3個であるしかありません';
$_LANG['not_fount_consignee'] = '申し訳ありません、選定する住所は存在しません。';

/*------------------------------------------------------ */
//-- 订单提交
/*------------------------------------------------------ */

$_LANG['goods_amount_not_enough'] = '您購買的商品沒有達到本店的最低限購金額 %s ，不能提交訂單。';
$_LANG['balance_not_enough'] = 'あなたの残高は全体の注文書を支払うことが足りません、どうぞその他の支払方法を選びます';
$_LANG['select_shipping'] = "お指定の配送方式";
$_LANG['select_payment'] = "お指定の支払方法";
$_LANG['order_amount'] = '振込金額';
$_LANG['go_pay'] = '払う';
$_LANG['remember_order_number'] = "あなたが当店でショッピングすることに感謝します！あなたの注文書はすでに成功に提出しました、どうぞあなたの注文書の番号をしっかり覚えます";
$_LANG['back_home'] = '<a href="index.php">HOMEに戻ります</a>';
$_LANG['goto_user_center'] = '<a href="user.php">ユーザーセンター</a>';
$_LANG['order_submit_back'] = ' %s あるいは %s';

$_LANG['sms_paid'] = 'すでにお金を支払いました';

$_LANG['notice_gb_order_amount'] = '（备注：团购如果有保证金，第一次只需支付保证金和相应的支付费用）';

$_LANG['pay_order'] = '注文書を支払います %s';
$_LANG['validate_bonus'] = '代金券を検証します';
$_LANG['input_bonus_no'] = 'あるいは代金券暗証番号を入力します';
$_LANG['select_bonus'] = '選択代金券';
$_LANG['bonus_sn_error'] = '代金券暗証番号誤った';
$_LANG['bonus_min_amount_error'] = 'この注文書は達していないで代金券の最低の金額を使います %s';
$_LANG['bonus_is_ok'] = 'この代金券は使うことができます， %s現金を使えます';
$_LANG['select_value_card'] = '选择已绑定储值卡';
$_LANG['input_value_card_no'] = '或者输入储值卡密码进行绑定';
$_LANG['bind_value_card'] = '绑定储值卡';


$_LANG['shopping_myship'] = '私の配送';
$_LANG['shopping_activity'] = 'イベントのリスト';
$_LANG['shopping_package'] = '超值禮包列表';

/*门店 by kong 20160722*/
$_LANG['stock_store_shortage'] = "非常抱歉，您选择的商品 %s 的门店库存数量只有 %d，您最多只能购买 %d 件。";
$_LANG['shop_store'] = "门店";
?>
