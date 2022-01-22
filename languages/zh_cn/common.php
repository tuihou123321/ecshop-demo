<?php

/**
 * DSC 前台语言文件
 * ============================================================================
 * * 版权所有 2005-2017 上海商创网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecmoban.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: Zhuo $
 * $Id: common.php 2016-01-04 Zhuo $
*/

$_LANG['merchants_article'] = "閲覧した記事は既に存在しません。Webサイトにお問い合わせください。";

/* 优惠券 start */
$_LANG['lang_goods_coupons']['all_pay'] = "満場券";
$_LANG['lang_goods_coupons']['user_pay'] = "会員券";
$_LANG['lang_goods_coupons']['goods_pay'] = "ショッピング券";
$_LANG['lang_goods_coupons']['reg_pay'] = "登録券";
$_LANG['lang_goods_coupons']['free_pay'] = "送料無料券";
$_LANG['lang_goods_coupons']['not_pay'] = "不明";
$_LANG['lang_goods_coupons']['is_goods'] = "商品に限る";
$_LANG['lang_goods_coupons']['is_cate'] = "カテゴリ限定";
$_LANG['lang_goods_coupons']['is_all'] = "全品目共通";

$_LANG['lang_coupons_receive_failure'] = "すみません、受け取りに成功しません。券はもう受領済みです";
$_LANG['lang_coupons_user_receive'] = "领取失败,您已经领取过该券了!每人限领取 %s 张";
$_LANG['lang_coupons_user_rank'] = "领取失败,仅限会员等级为: %s 领取";
$_LANG['lang_coupons_receive_succeed'] = "领取成功！感谢您的参与，祝您购物愉快~";
/* 优惠券 end */

/* 众筹 start */
$_LANG['lang_crowd_preheat'] = "预热中";
$_LANG['lang_crowd_of'] = "众筹中";
$_LANG['lang_crowd_succeed'] = "众筹成功";

$_LANG['lang_crowd_art_succeed'] = "发布成功";
$_LANG['lang_crowd_art_succeed_repeat'] = "已经发布过啦，请不要重复发布！";
$_LANG['lang_crowd_login'] = "登陆后发布话题";

$_LANG['lang_crowd_page_title'] = "众筹-收货地址";

$_LANG['lang_crowd_login_focus'] = "只有登陆用户才能关注";
$_LANG['lang_crowd_focus_succeed'] = "关注成功";
$_LANG['lang_crowd_focus_repeat'] = "已经关注过啦，请不要重复关注！";
$_LANG['lang_crowd_focus_cancel'] = "取消关注成功!";

$_LANG['lang_crowd_like'] = "点赞成功";
$_LANG['lang_crowd_like_repeat'] = "已经点过赞啦，请不要重复点赞！";

$_LANG['lang_crowd_next_step'] = "下一步";
$_LANG['lang_crowd_not_login'] = "您尚未登录，请登录您的账号！";

$_LANG['lang_crowd_not_pay'] = "您有未支付的众筹订单，请付款后再提交新订单";
$_LANG['lang_crowd_not_address'] = "您没有设置收货地址";
/* 众筹 end */

$_LANG['lang_product_sn'] = "货品货号";

$_LANG['dwt_shop_name'] = "";

$_LANG['order_payed_sms'] = '注文書 %s 支払完了した。受け取り人：%s；電話：%s。';

//ecmoban模板堂 --zhuo start 审核收货人地址
$_LANG['order_address_stay'] = "无法提交订单<br/>收货地址已被修改，待审核中...";
$_LANG['order_address_no'] = "无法提交订单<br/>收货地址已被修改，审核未通过...";
$_LANG['index_lnk'] = "返回首页，继续购物！";

$_LANG['edit_address_success'] = '您的收货地址信息已成功更新,待审核通过';
$_LANG['address_list_lnk'] = '返回地址列表';

$_LANG['signin_failed_user'] = '收货地址为空，请您添加收货地址';
$_LANG['lnk_user'] = "去添加收货地址";
//ecmoban模板堂 --zhuo end 审核收货人地址

$_LANG['single_user'] = '用户晒单'; //by zhang
$_LANG['discuss_user'] = '网友讨论圈'; //by zhang
$_LANG['allcount'] = '全部帖子'; //by zhang
$_LANG['s_count'] = '晒单帖';
$_LANG['t_count'] = '讨论帖';
$_LANG['w_count'] = '问答帖';
$_LANG['q_count'] = '圈子帖';
$_LANG['reply_number'] = '回复数';
$_LANG['click_count'] = '点击数';
$_LANG['sort']['single_sort'] = '排序';

$_LANG['set_gcolor'] = '设置商品颜色'; //by zhang

//ecmoban模板堂 --zhuo start
$_LANG['ff'][FF_NOMAINTENANCE] =  '未维修';
$_LANG['ff'][FF_MAINTENANCE] =  '已维修';
$_LANG['ff'][FF_NOEXCHANGE] =  '未换货';
$_LANG['ff'][FF_EXCHANGE] =  '已换货';

$_LANG['steps_UserLogin'] = '您尚未登录，无法申请入驻';
$_LANG['UserLogin'] = '去登陆';

$_LANG['please_select'] = '请选择';
$_LANG['country'] = '国家';
$_LANG['province'] = '省';
$_LANG['city'] = '市';
$_LANG['area'] = '区';

$_LANG['delivery_warehouse'] = '发货仓库';

$_LANG['group_shortage'] = "对不起，该套餐主件商品已经库存不足暂停销售。\n你现在要进行缺货登记来预订该商品吗？";
$_LANG['group_not_on_sale'] = '对不起，该套餐主件商品已经下架。';
$_LANG['group_goods_not_exists'] = "对不起，指定的套餐主件商品不存在";

$_LANG['not_start'] = '未开始';
$_LANG['overdue'] = '已过期';
$_LANG['has_ended'] = '已结束';
$_LANG['not_use'] = '未使用';
$_LANG['had_use'] = '已使用';
//ecmoban模板堂 --zhuo end

/* 用户登录语言项 */
$_LANG['empty_username_password'] = 'あなた様はかならず完全な会員名とパスワードを入力する';
$_LANG['shot_message'] = "ショート?メッセージ";

/* 公共语言项 */

$_LANG['largess'] = '贈り物';
$_LANG['sys_msg'] = '系統的な注意';
$_LANG['catalog'] = 'ディレクトリ';
$_LANG['please_view_order_detail'] = '商品はもう発送しました。詳しい情況は会員センターの中で検索してください。';
$_LANG['user_center'] = '会員センター';
$_LANG['shop_closed'] = '本店盤點中，請您稍後再來...';
$_LANG['shop_register_closed'] = '該網店暫停註冊';
$_LANG['shop_upgrade'] = "本店升級中，管理員從 <a href=\"admin/\">管理中心</a> 登錄後，系統會自動完成升級";
$_LAG['js_languages']['process_request'] = 'あなた様の申請を処理している。';
$_LANG['process_request'] = 'あなた様の申請を処理している。';
$_LANG['please_waiting'] = '少々お待ちして下さい。記載中…';
$_LANG['icp_number'] = 'ICP備案證書号';
$_LANG['plugins_not_found'] = "插件 %s 無法定位";
$_LANG['home'] = 'ホームページ';
$_LANG['back_up_page'] = '戻る';
$_LANG['close_window'] = 'ウィンドウを閉める';
$_LANG['back_home'] = 'ホームページに戻る';
$_LANG['ur_here'] = '今の位置';
$_LANG['all_goods'] = 'すべての商品';
$_LANG['all_recommend'] = "すべてのお勧め";
$_LANG['all_attribute'] = "すべて";
$_LANG['promotion_goods'] = '特典の商品';
$_LANG['best_goods'] = '特別な薦め';
$_LANG['new_goods'] = '新着商品';
$_LANG['hot_goods'] = '売れ商品';
$_LANG['view_cart'] = '買い物カゴを見る';
$_LANG['catalog'] = 'すべての分類';
$_LANG['regist_login'] = '新規登録/登録';
$_LANG['profile'] = '個人情報';
$_LANG['query_info'] = "共執行 %d 個查詢，用時 %f 秒，在線 %d 人";
$_LANG['gzip_enabled'] = '，Gzip 已啟用';
$_LANG['gzip_disabled'] = '，Gzip 已禁用';
$_LANG['memory_info'] = '，佔用內存 %0.3f MB';
$_LANG['cart_info'] = '買い物カゴの中で%d個商品がある。合計金額%s。';
$_LANG['shopping_and_other'] = 'この商品を購入したことがある人はまだこちらの商品を購入したよ。';
$_LANG['bought_notes'] = '購入記録';
$_LANG['later_bought_amounts'] = '最近取引ができた数量';
$_LANG['bought_time'] = '購入時間';
$_LG['turnover'] = '取引ができる';
$_LANG['no_notes'] = 'まだない人はこの商品を買ったことがある。';
$_LANG['shop_price'] = '販売価格：';
$_LANG['market_price'] = '市場価格：';
$_LANG['goods_brief'] = '商品の説明：';
$_LANG['goods_album'] = '商品の写真';
$_LANG['promote_price'] = "特典の価格：";
$_LANG['fittings_price'] = '付属品の価格：';
$_LANG['collect'] = 'お気に入りに追加';
$_LANG['add_to_cart'] = '買い物カゴに入れる';
$_LANG['return_to_cart'] = '買い物カゴに戻す';
$_LANG['search_goods'] = '商品検索';
$_LANG['search'] = '検索';
$_LANGG['wholesale_search'] = '卸売りの商品を検索';
$_LANG['article_title'] = '文章のタイトル';
$_LANG['article_author'] = '作者名';
$_LANG['article_add_time'] = '投稿日';
$_LANG['relative_file'] = '[ 関連のダウンロード ]';
$_LANG['category'] = '分類';
$_LANG['brand'] = 'ブランド';
$_LANG['price_min'] = '最低価格';
$_LANG['price_max'] = '最高価格';
$_LANG['goods_name'] = '商品名';
$_LANG['goods_attr'] = '規格紹介';
$_LANG['goods_price_ladder'] = '價格階梯';
$_LANG['ladder_price'] = "販売価格";
$_LANG['shop_prices'] = "販売価格";
$_LANG['market_prices'] = '市場価格';
$_LANG['deposit'] = '團購保證金';
$_LANG['amount'] = '商品代金';
$_LANG['number'] = '購入数量';
$_LANG['handle'] = '操作';
$_LANG['add'] = '添付';
$_LANG['edit'] = '編集';
$_LANG['drop'] = '削除';
$_LANG['view'] = '調べる';
$_LANG['modify'] = '修正';
$_LANG['is_cancel'] = '取消';
$_LANG['amend_amount'] = '数量修正';
$_LANG['end'] = '終わり';
$_LANG['require_field'] = '(かならず入力)';
$_LANG['search_result'] = '検索結果';
$_LANG['order_number'] = '発注書号';
$_LANG['consignment'] = '送り状';
$_LANG['activities'] = '商品正在進行的活動';
$_LANG['remark_package'] = '超值禮包';
$_LANG['old_price'] = '原  價：';
$_LANG['package_price'] = '禮包價：';
$_LANG['then_old_price'] = '節  省：';
$_LANG['free_goods'] = '送料無料の商品';
$_LANG['back_auction_home'] = 'オークションのトップページに戻る';

$_LANG['searchkeywords_notice'] = "商品説明の中で検索する";
$_LANG['hidden_outstock'] = 'すでに品切れになった商品を隠す。';
$_LANG['keywords'] = 'キーワード';
$_LANG['sc_ds'] = '商品説明の中で検索する';
$_LANG['button_search'] = '検索し始める';
$_LANG['no_search_result'] = 'すみません。検索の商品がない。';
$_LANG['all_category'] = 'すべての分類';
$_LANG['all_brand'] = 'すべてのブランド';
$_LANG['all_option'] = '選んでください。';
$_LANG['extension'] = '拡充オプション';
$_LANG['gram'] = 'グラム';
$_LANG['kilogram'] = 'キログラム';
$_LANG['goods_sn'] = '品番：';
$_LANG['goods_brand'] = '商品ブランド：';
$_LANG['goods_weight'] = '商品の重さ：';
$_LANG['goods_number'] = '商品の在庫：';
$_LANG['goods_give_integral'] = '購買此商品贈送：';
$_LANG['goods_integral'] = '購買此商品可使用：';
$_LANG['goods_free_shipping'] = '此商品為免運費商品，計算配送金額時將不計入配送費用';
$_LANG['goods_bonus'] = '購買此商品可獲得紅包：';
$_LANG['goods_rank'] = '用戶評價：';
$_LANG['goods_compare'] = '商品比較';
$_LANG['properties'] = '商品の属性';
$_LANG['brief'] = '簡潔な紹介：';
$_LANG['add_time'] = '上架時間：';
$_LANG['residual_time'] = '剩餘時間：';
$_LANG['day'] = '日';
$_LANG['hour'] = '時';
$_LANG['minute'] = '分';
$_LANG['compare'] = '比較';
$_LANG['volume_price'] = '購入数量は以下の範囲になる時、以下の特典価格を享受することができる。';
$_LANG['number_to'] = '購入数量はこれになる';
$_LANG['article_list'] = '文章のリスト';

$_LANG['not'] = "无";
$_LANG['open'] = "展开";
$_LANG['open_more'] = "展开更多";
$_LANG['stop'] = "收起";
$_LANG['stop_more'] = "收起更多";
$_LANG['time'] = "时间";
$_LANG['money_symbol'] = "￥";
$_LANG['current_price'] = '当前价格';
$_LANG['start_time'] = '开始时间';
$_LANG['end_time'] = '结束时间';
$_LANG['con_cus_service'] = '联系客服';
$_LANG['min_fare'] = '最低加价';
$_LANG['max_fare'] = '最高加价';
$_LANG['store_shop'] = '商家店铺';
$_LANG['see_more'] = '詳細を表示';
$_LANG['comprehensive'] = '综合好评';
$_LANG['branch'] = '分';
$_LANG['score_detail'] = '评分明细';
$_LANG['industry_compare'] = '行业相比';
$_LANG['goods'] = '商品';
$_LANG['service'] = '服务';
$_LANG['prescription'] = '时效';
$_LANG['store_total'] = '店铺总分';
$_LANG['company'] = '公&nbsp;&nbsp;&nbsp;&nbsp;司';
$_LANG['seat_of'] = '所在地';
$_LANG['online_service'] = '在线客服';
$_LANG['enter_the_shop'] = '进入店铺';
$_LANG['follow'] = '关注';
$_LANG['follow_yes'] = '已关注';
$_LANG['follow_store'] = '关注店铺';
$_LANG['assign'] = '确定';
$_LANG['au_number'] = '次出价';
$_LANG['brand_home'] = '品牌首页';
$_LANG['brand_category'] = '品牌分类';

$_LANG['look_new'] = '找新品';
$_LANG['look_hot'] = '找热卖';
$_LANG['all_category'] = '全部分类';
$_LANG['change_a_lot'] = '换一批';
$_LANG['best'] = '精品';
$_LANG['see_all'] = '查看全部';
$_LANG['ren'] = '人';
$_LANG['jian_goods'] = '件商品';
$_LANG['guess_love'] = '好きかもしれない商品';
$_LANG['sale_amount'] = '销售量';
$_LANG['screen_price'] = '请填写筛选价格';
$_LANG['screen_price_left'] = '请填写筛选左边价格';
$_LANG['screen_price_right'] = '请填写筛选右边价格';
$_LANG['screen_price_dy'] = '左边价格不能大于或等于右边价格';
$_LANG['publish_top'] = '发表新话题';
$_LANG['types'] = '类型';
$_LANG['publish'] = '发表';
$_LANG['statement'] = '声明';
$_LANG['statement_one'] = '1、欢迎您在此提出与商品有关的问题，为保证话题质量，铁牌及以上级别用户可以发表话题，注册及以上级别用户可以回复；';
$_LANG['statement_two'] = '2、网友讨论采用先发布后审核原则，如果我们认为您的发贴不能给其他用户带来帮助或违反国家有关规定，' . @$dwt_shop_name . '商城有权删除';
$_LANG['commentTitle_not'] = '主题不能为空';
$_LANG['commentTitle_xz'] = '标题长度只能在2-50个字符之间';
$_LANG['content_not'] = '内容不能为空';
$_LANG['captcha_not'] = '验证码不能为空';
$_LANG['captcha_xz'] = '请输入4位数的验证码';
$_LANG['message_see'] = '【新消息】请查收!';
$_LANG['message_not'] = '【　　　】请查收!';

/* 商品比较JS语言项 */
$_LANG['compare_js']['button_compare'] = '選定する商品を比較する';
$_LANG['compare_js']['exist'] = 'あなた様はもう%sを選んだ。';
$_LANG['compare_js']['count_limit'] = '最多で4つの商品が比較を行うことを選ぶことしかできない。';
$_LANG['compare_js']['goods_type_different'] = '\"%s\"はすでに選んだ商品のタイプと違う。比較を行うことができない。';

$_LANG['bonus'] = '特典券：';
$_LANG['no_comments'] = 'しばらくまだいかなる会員の評論がない';
$_LANG['give_comments_rank'] = '給出';
$_LANG['comments_rank'] = '評価';
$_LANG['comment_num'] = "会員の評価 %d 条記録";
$_LANG['login_please'] = 'あなた様はまだ登録しないんです。だから、あなた様はまだこの機能を使うことができない！';
$_LANG['collect_existed'] = 'この商品はすでにあなた様のお気に入りの中に存在しました。';
$_LANG['collect_success'] = 'この商品はすでにみごとにあなた様のお気に入りにいました。';
$_LANG['cancel_brand_success'] = 'このブランドへの注目を取り消しました';
$_LANG['send_authemail_success'] = 'メール送信の検証に成功しました';
$_LANG['copyright'] = "Copyright &copy; 2005-%s %s Corporation. All Rights Reserved.";
$_LANG['no_ads_id'] = '広告のIDとジャンプするURLを指定していない！';
$_LANG['remove_collection_confirm'] = 'あなた様はお気に入りの中から選定する商品を削除することを確定しますか？';
$_LANG['err_change_attr'] = '指定する商品（商品の属性）を探し当てていない.';

$_LANG['collect_goods'] = '商品を収集する';
$_LANG['plus'] = '加える';
$_LANG['minus'] = '減らす';
$_LANG['yes'] = 'はい';
$_LANG['no'] = 'いいえ';

$_LANG['same_attrbiute_goods'] = '同じ%sの商品';

/* TAG */
$_LANG['button_submit_tag'] = '添加我的标记';
$_LANG['tag_exists'] = '您已经为该商品添加过一个标记，请不要重复提交.';
$_LANG['tag_cloud'] = '标签云';
$_LANG['tag_anonymous'] = '对不起，只有注册会员并且正常登录以后才能提交标记。';
$_LANG['tag_cloud_desc'] = '标签云（Tag cloud）是用以表示一个网站中的内容标签。 标签（tag、关键词）是一种更为灵活、有趣的商品分类方式，您可以为每个商品添加一个或多个标签，那么可以通过点击这个标签查看商品其他会员提交的与您的标签一样的商品,能够让您使用最快的方式查找某一个标签的所有网店商品。比方说点击“红色”这个标签，就可以打开这样的一个页面，显示所有的以“红色” 为标签的网店商品';

/* AJAX 相关 */
$_LANG['invalid_captcha'] = 'すみません。あなた様の入力の確認コードは間違った！';
$_LANG['goods_exists'] = 'すみません。あなた様の買い物カゴの中では同じ商品がすでに存在した。';
$_LANG['fitting_goods_exists'] = 'すみません。あなた様の買い物カゴの中ではすでにこの付属品を添付した。';
$_LANG['invalid_number'] = 'すみません。あなた様は1つの不法な商品数量を入力した。';
$_LANG['not_on_sale'] = 'すみません。この商品はすでに品切れにあった。';
$_LANG['no_basic_goods'] = 'すみません。この付属品のオリジナルを買わないので、この商品は付属品にして買うことができない。';
$_LANG['cannt_alone_sale'] = 'すみません。この商品は単独で販売することができない';
$_LANG['shortage'] = "すみません。この商品は在庫不足で販売停止です。\nあなた様はこの商品を注文予定したいですか？";
$_LANG['shortage_little'] = "この商品はもう在庫不足です。あなた様の注文数量は3個までに修正した。\n今買い物カゴに行きたいですか？";
$_LANG['oos_tips'] = 'この商品は在庫不足だ。あなた様はこの商品を注文予定したいですか？';

$_LANG['addto_cart_success_1'] = "この商品は買い物カゴに入った。あなた様まだ続き買い物したいですか？\nもしあなた様はすぐ決算することを望むならば、「確定」をクリックしてください。\nもしあなた様は引き続き買い物することを望むならば、「取り消す」をクリックしてください。";
$_LANG['addto_cart_success_2'] = "この商品は買い物カゴに入った。あなた様まだ続き買い物したいですか？\nもしあなた様は引き続き買い物することを望むならば、「確定」をクリックしてください。\nもしあなた様はすぐ決算することを望むならば、「取り消す」をクリックしてください。";
$_LANG['no_keywords'] = "検索キーワードを入力してください。";

/* 分页排序 */
$_LANG['exchange_sort']['goods_id'] = '入荷時間によってソートする';
$_LANG['exchange_sort']['exchange_integral'] = '積分によってソートする';
$_LANG['exchange_sort']['last_update'] = '更新時間によってソートする';
$_LANG['sort']['goods_id'] = '入荷時間によってソートする';
$_LANG['sort']['shop_price'] = '価格によってソートする';
$_LANG['sort']['last_update'] = '更新時間によってソートする';
$_LANG['order']['DESC'] = '反序';
$_LANG['order']['ASC'] = '順序';
$_LANG['pager_1'] = '總計 ';
$_LANG['pager_2'] = "件商品";
$_LANG['pager_3'] = '，總計 ';
$_LANG['pager_4'] = ' 頁。';
$_LANG['page_first'] = '第一頁';
$_LANG['page_prev'] = "前へ";
$_LANG['page_next'] = "次へ";
$_LANG['page_last'] = '最後頁';
$_LANG['btn_display'] = '表示方式';
$_LANG['page_last_new'] = '最後頁';

/* 投票 */
$_LANG['vote_times'] = '参与人次';
$_LANG['vote_ip_same'] = '对不起，您已经投过票了!';
$_LANG['submit_vote'] = '投票';
$_LANG['submit_reset'] = '重选';
$_LANG['vote_success'] = '恭喜你，投票成功';

/* 评论 */
$_LANG['cmt_submit_done'] = '評論はすでに発表しました。どうも有り難うございました。';
$_LANG['cmt_submit_wait'] = "評論は発表成功になりました。管理者の審査することを待ってください。";
$_LANG['cmt_lang']['cmt_empty_username'] = 'あなた様の会員名を入力してください。';
$_LANG['cmt_lang']['cmt_empty_email'] = 'あなた様のメールアドレスを入力してください。';
$_LANG['cmt_lang']['cmt_error_email'] = 'メールアドレスの書式は正確ではない。';
$_LANG['cmt_lang']['cmt_empty_content'] = '評論の内容を入力していない。';
$_LANG['cmt_spam_warning'] = 'もう一度評論を発表するのはかならず30秒以後です。少々お待ちして下さい！';
$_LANG['cmt_lang']['captcha_not_null'] = '確認コードなくなることができない。';
$_LANG['cmt_lang']['cmt_invalid_comments'] = '無効な評論の内容だ。';
$_LANG['invalid_comments'] = '無効な評論の内容だ。';
$_LANG['error_email'] = 'メールアドレスの書式は正確ではない！';
$_LANG['admin_username'] = "管理者：";
$_LANG['reply_comment'] = '返事';
$_LANG['comment_captcha'] = '確認コード';
$_LANG['comment_login'] = '会員だけが評論を発表することができる。登録後また評論してください。';
$_LANG['comment_custom'] = '評論失敗！当店で商品を買ったことがある会員だけが評論を発表することができる。';
$_LANG['comment_brought'] = '評論失敗！この商品を買ったことがある会員だけが評論を発表することができる。';
$_LANG['anonymous'] = '匿名の会員';
/* 其他信息 */
$_LANG['js_languages']['goodsname_not_null'] = '商品名がないことができない。';

/* 商品比较 */
$_LANG['compare_remove'] = '移す';
$_LANG['compare_no_goods'] = '比較必要の商品を選定していない。あるいは、比較の商品数量は2つより少ない。';
$_LANG['no_user_name'] = 'この会員は存在しない。';
$_LANG['undifine_rank'] = '会員の等級が定義していない。';
$_LANG['not_login'] = 'まだ登録していない';
$_LANG['half_info'] = '情報は完備していないで、すべての情報を入力して下さい。';
$_LANG['no_id'] = '商品ＩＤがない。';
$_LANG['save_success'] = '修正成功';
$_LANG['drop_consignee_confirm'] = '荷受人の情報を削除することを確定しますか？';

/* 夺宝奇兵 */
$_LANG['snatch_js']['price_not_null'] = '价格不能为空';
$_LANG['snatch_js']['price_not_number'] = '价格只能是数字';
$_LANG['snatch_list'] = '夺宝奇兵列表';
$_LANG['not_in_range'] = '你只能在%d到%d之间出价';
$_LANG['also_bid'] = '你已经出过价格 %s 了';
$_LANG['lack_pay_points'] = '你积分不够，不能出价';
$_LANG['snatch'] = '夺宝奇兵';
$_LANG['snatch_is_end'] = '活动已经结束';
$_LANG['snatch_start_time'] = '本次活动从 %s 到 %s 截止';
$_LANG['price_extent'] = '出价范围为';
$_LANG['user_to_use_up'] = '用户可多次出价，每次消耗';
$_LANG['snatch_victory_desc'] = '当本期活动截止时，系统将从所有竞价奖品的用户中，选出在所有竞价中出价最低、且没有其他出价与该价格重复的用户（即最低且唯一竞价），成为该款奖品的获胜者.';
$_LANG['price_less_victory'] = '如果用户获胜的价格低于';
$_LANG['price_than_victory'] = '将能按当期竞拍价购得该款奖品；如果用户获胜的价格高于';
$_LANG['or_can'] = '则能以';
$_LANG['shopping_product'] = '购买该款奖品';
$_LANG['victory_price_product'] = '获胜用户将能按当期竞拍价购得该款奖品.';
$_LANG['now_not_snatch'] = '当前没有活动';
$_LANG['my_integral'] = '我的积分';
$_LANG['bid'] = '出价';
$_LANG['me_bid'] = '我要出价';
$_LANG['me_now_bid'] = '我的出价';
$_LANG['only_price'] = '唯一价格';
$_LANG['view_snatch_result'] = '活动结果';
$_LANG['victory_user'] = '获奖用户';
$_LANG['price_bid'] = '所出价格';
$_LANG['bid_time'] = '出价时间';
$_LANG['not_victory_user'] = '没有获奖用户';
$_LANG['snatch_log'] = '参加夺宝奇兵%s ';
$_LANG['not_for_you'] = '你不是获胜者，不能购买';
$_LANG['order_placed'] = '您已经下过订单了，如果您想重新购买，请先取消原来的订单';

/* 购物流程中的前台部分 */
$_LANG['select_spe'] = '商品の属性を選んでください。';

/* 购物流程中的订单部分 */
$_LANG['price'] = '価格';
$_LANG['name'] = '商品名';
$_LANG['describe'] = '出荷日';
$_LANG['fee'] = '送料';
$_LANG['free_money'] = '送料無料の要求';
$_LANG['img'] = '写真';
$_LANG['no_pack'] = '不要包裝';
$_LANG['no_card'] = '不要賀卡';
$_LANG['bless_note'] = '祝福語';
$_LANG['use_integral'] = '使用積分';
$_LANG['can_use_integral'] = '您當前的可用積分為';
$_LANG['noworder_can_integral'] = '本訂單最多可以使用';
$_LANG['use_surplus'] = '使用残額';
$_LANG['your_surplus'] = '使用できる残額';
$_LANG['pay_fee'] = '支払手数料';
$_LANG['insure_fee'] = '保険料';
$_LANG['need_insure'] = '配送保険が欲しいですか？';
$_LANG['cod'] = '配送決定';

$_LANG['curr_stauts'] = '当前状态';
$_LANG['use_bonus'] = '代金券を使う ';
$_LANG['use_value_card'] = '使用储值卡';
$_LANG['value_card_dis'] = '储值卡折扣';
$_LANG['use_bonus_kill'] = '使用线下红包';
$_LANG['invoice'] = '开发票';
$_LANG['invoice_type'] = '发票类型';
$_LANG['invoice_title'] = '发票抬头';
$_LANG['invoice_content'] = '发票内容';
$_LANG['order_postscript'] = '订单附言';
$_LANG['booking_process'] = '缺货处理';
$_LANG['complete_acquisition'] = '该订单完成后，您将获得';
$_LANG['with_price'] = '以及价值';
$_LANG['de'] = '的';
$_LANG['bonus'] = '红包';
$_LANG['goods_all_price'] = '商品总价';
$_LANG['dis_amount'] = '商品优惠';
$_LANG['discount'] = '折扣';
$_LANG['tax'] = '发票税额';
$_LANG['shipping_fee'] = '配送费用';
$_LANG['pack_fee'] = '包装费用';
$_LANG['card_fee'] = '贺卡费用';
$_LANG['total_fee'] = '应付款金额';
$_LANG['self_site'] = '本站';
$_LANG['order_gift_integral'] = '订单 %s 赠送的积分';

/* 缺货处理 */
$_LANG['oos'][OOS_WAIT] = '入荷品が届いた後で発送する。今しばらくお待ち下さい。';
$_LANG['oos'][OOS_CANCEL] = '注文書を取り消す';
$_LANG['oos'][OOS_CONSULT] = '担当者に相談する';

/* 评论部分 */
$_LANG['username'] = '会員名';
$_LANG['email'] = 'メールアドレス';
$_LANG['comment_rank'] = '評論の等級';
$_LANG['comment_content'] = '評論の内容';
$_LANG['submit_comment'] = '評論を差し出す';
$_LANG['button_reset'] = '内容を取り除く';
$_LANG['goods_comment'] = '商品の評論';
$_LANG['article_comment'] = '文章の評論';

/* 支付确认部分 */
$_LANG['pay_status'] = '支払ステータス';
$_LANG['pay_not_exist'] = 'この支払方式がない。';
$_LANG['pay_disabled'] = 'この支払方式はまだ使用し始められていない。';
$_LANG['pay_success'] = '今度の支払完了した。';
$_LANG['pay_fail'] = '支払が失敗になりました。もう一度支払してみてください。';

/* 文章部分 */
$_LANG['new_article'] = 'ニュース';
$_LANG['shop_notice'] = '掲示板';
$_LANG['order_already_received'] = 'この注文書は受付しました。ご注文をどうも有り難うございました。また機会がありましたらよろしくお願い致します。';
$_LANG['order_invalid'] = '差し出す注文書は問題がある。当社にメールで連絡してください。';
$_LANG['act_ok'] = '商品が無事に届き安心しました。最後まで安心してお取引を進める事ができ感謝しております、機会が御座いましたら又宜しくお願い致します。';
$_LANG['receive'] = '商品到着確認';
$_LANG['buyer'] = '売り手';
$_LANG['next_article'] = '次の記事';
$_LANG['prev_article'] = '前の記事';

/* 虚拟商品 */
$_LANG['virtual_goods_ship_fail'] = '部分商品自动发货失败，请尽快联系商家重新发货';

/* 选购中心 */
$_LANG['pick_out'] = '选购中心';
$_LANG['fit_count'] = "共有 %s 件商品符合条件";
$_LANG['goods_type'] = "商品类型";
$_LANG['remove_all'] = '移除所有';
$_LANG['advanced_search'] = '高级搜索';
$_LANG['activity'] = '本商品正在进行';
$_LANG['order_not_exists'] = "非常抱歉，没有找到指定的订单。请和网站管理员联系。";

$_LANG['promotion_time'] = '的时间为%s到%s，赶快来抢吧！';

/* 倒计时 */
$_LANG['goods_js']['day'] = '日';
$_LANG['goods_js']['hour'] = '時';
$_LANG['goods_js']['minute'] = '分';
$_LANG['goods_js']['second'] = '秒';
$_LANG['goods_js']['end'] = '終わった';

/*商品语言JS start*/
$_LANG['goods_js']['goods_attr_js'] = '商品仕様タイプをお選びください';
/*商品语言JS end*/

$_LANG['favourable'] = '特典のイベント';

/* 团购部分语言项 */
$_LANG['group_buy'] = '团购活动';
$_LANG['group_buy_goods'] = '团购商品';
$_LANG['gb_goods_name'] = '团购商品：';
$_LANG['gb_start_date'] = '开始时间：';
$_LANG['gb_end_date'] = '结束时间：';
$_LANG['gbs_pre_start'] = '该团购活动尚未开始，请继续关注。';
$_LANG['gbs_under_way'] = '该团购活动正在火热进行中，距离结束时间还有：';
$_LANG['gbs_finished'] = '该团购活动已结束，正在等待处理...';
$_LANG['gbs_succeed'] = '该团购活动已成功结束！';
$_LANG['gbs_fail'] = '该团购活动已结束，没有成功。';
$_LANG['gb_price_ladder'] = '价格阶梯：';
$_LANG['gb_ladder_amount'] = '数量';
$_LANG['gb_ladder_price'] = '价格';
$_LANG['gb_deposit'] = '保证金：';
$_LANG['gb_restrict_amount'] = '限购数量：';
$_LANG['gb_limited'] = '限购';
$_LANG['gb_gift_integral'] = '赠送积分：';
$_LANG['gb_cur_price'] = '当前价格：';
$_LANG['gb_valid_goods'] = '当前定购数量：';
$_LANG['gb_final_price'] = '成交价格：';
$_LANG['gb_final_amount'] = '成交数量：';
$_LANG['gb_notice_login'] = '提示：您需要先注册成为本站会员并且登录后，才能参加商品团购!';
$_LANG['gb_error_goods_lacking'] = '对不起，商品库存不足，请您修改数量！';
$_LANG['gb_error_restrict_amount'] = '对不起，您购买的商品数量已达到限购数量！';
$_LANG['gb_error_status'] = '对不起，该团购活动已经结束或尚未开始，现在不能参加！';
$_LANG['gb_error_login'] = '对不起，您没有登录，不能参加团购，请您先登录！';
$_LANG['group_goods_empty'] = '当前没有团购活动';

/* 预售部分语言项 */
$_LANG['presale_error_status'] = '对不起，该预售活动已经结束或尚未开始，现在不能参加！';
$_LANG['back_to_presale'] = '返回预售商品';

/* 拍卖部分语言项 */
$_LANG['auction'] = '拍卖活动';
$_LANG['auction_list'] = '拍卖活动列表';
$_LANG['act_status'] = '活动状态';
$_LANG['au_start_price'] = '起拍价';
$_LANG['au_start_price_two'] = '起 拍 价';
$_LANG['au_end_price'] = '一口价';
$_LANG['au_end_price_two'] = '一 口 价';
$_LANG['au_amplitude'] = '加价幅度';
$_LANG['au_deposit'] = '保证金';
$_LANG['au_deposit_two'] = '保 证 金';
$_LANG['no_auction'] = '当前没有拍卖活动';
$_LANG['au_pre_start'] = '该拍卖活动尚未开始';
$_LANG['au_under_way'] = '该拍卖活动正在进行中，距离结束时间还有：';
$_LANG['au_under_way_1'] = '该拍卖活动正在进行中';
$_LANG['au_bid_user_count'] = '已出价人数';
$_LANG['au_last_bid_price'] = '最后出价';
$_LANG['au_last_bid_user'] = '最后出价的买家';
$_LANG['au_last_bid_time'] = '最后出价时间';
$_LANG['au_finished'] = '该拍卖活动已结束';
$_LANG['au_bid_user'] = '买家';
$_LANG['au_bid_price'] = '出价';
$_LANG['au_bid_time'] = '时间';
$_LANG['au_bid_status'] = '状态';
$_LANG['no_bid_log'] = '暂时没有买家出价';
$_LANG['au_bid_ok'] = '领先';
$_LANG['out'] = '出局';
$_LANG['au_i_want_bid'] = '我要出价';
$_LANG['nin_want_bid'] = '您的出价';
$_LANG['button_bid'] = '出价';
$_LANG['button_buy'] = '注文する';
$_LANG['au_not_under_way'] = '拍卖活动已结束，不能再出价了';
$_LANG['au_bid_price_error'] = '请输入正确的价格';
$_LANG['au_bid_after_login'] = '您只有注册成为会员并且登录之后才能出价';
$_LANG['au_bid_repeat_user'] = '您已经是这个商品的最高出价人了!';
$_LANG['au_your_lowest_price'] = '您的出价不能低于 %s';
$_LANG['au_your_lowest_price_wen'] ='您的出价不能低于 ¥';
$_LANG['au_user_money_short'] = '您的可用资金不足，请先到用户中心充值!';
$_LANG['au_unfreeze_deposit'] = '解冻拍卖活动的保证金：%s';
$_LANG['au_freeze_deposit'] = '冻结拍卖活动的保证金：%s';
$_LANG['au_not_finished'] = '该拍卖活动尚未结束，不能购买';
$_LANG['au_order_placed'] = '您已经下过订单了，如果您想重新购买，请先取消原来的订单';
$_LANG['au_no_bid'] = '该拍卖活动没有人出价，不能购买';
$_LANG['au_final_bid_not_you'] = '您不是最高出价者，不能购买';
$_LANG['au_buy_after_login'] = '请您先登录';
$_LANG['au_is_winner'] = '恭喜您！您已经赢得了该商品的购买权.您可以点击购买按钮将宝贝买回家。';
$_LANG['au_mechanism'] = '拍卖机构';
$_LANG['bidding_process'] = '竞拍流程';
$_LANG['process_step_one'] = '用户账号当前余额不低于保证金金额';
$_LANG['process_step_two'] = '保证竞拍结束时出价最高，获得竞拍商品';
$_LANG['process_step_three'] = '填写订单信息，提交订单';
$_LANG['process_step_four'] = '支付已提交的订单';
$_LANG['process_step_five'] = '支付成功后等待收货，竞拍完成';
$_LANG['auction_desc'] = '竞拍详情';
$_LANG['au_introduce'] = '拍卖介绍';
$_LANG['au_raiders'] = '竞拍攻略';
$_LANG['au_ren'] = '竞拍人';
$_LANG['rec_au'] = '推荐拍品';
$_LANG['bid_number'] = '出价人次';
$_LANG['au_end'] = '竞拍结束';
$_LANG['more'] = '更多';

/* 批发部分语言项 */
$_LANG['ws_user_rank'] = '您的等级暂时无法查看批发方案';
$_LANG['ws_login_please'] = '请您先登录';
$_LANG['ws_return_home'] = '返回首页';
$_LANG['ws_return_wholesale'] = '返回批发市场';
$_LANG['wholesale'] = '批发';
$_LANG['no_wholesale'] = '没有批发商品';
$_LANG['ws_price'] = '批发价';
$_LANG['ws_subtotal'] = '小計';
$_LANG['ws_invalid_goods_number'] = '请输入正确的数量';
$_LANG['ws_attr_not_matching'] = '您选择的商品属性不存在，请参照批发价格单选择';
$_LANG['ws_goods_number_not_enough'] = '您购买的数量没有达到批发的最小数量，请参照批发价格单';
$_LANG['ws_goods_attr_exists'] = "该商品已经在购物车中，不能再次加入";
$_LANG['ws_remark'] = '请输入您的联系方式、付款方式和配送方式等信息';
$_LANG['ws_order_submitted'] = '您的订单已提交成功，请记住您的订单号: %s。';
$_LANG['ws_price_list'] = '价格单';
$_LANG['give_integral'] = '商品赠送积分';

/* 积分兑换部分语言项 */
$_LANG['exchange'] = '积分商城';
$_LANG['exchange_integral'] = '消耗积分：';
$_LANG['exchange_goods'] = '立刻兑换';
$_LANG['eg_error_login'] = '对不起，您没有登录，不能参加兑换，请您先登录！';
$_LANG['eg_error_status'] = '对不起，该商品已经取消，现在不能兑换！';
$_LANG['eg_error_integral'] = '对不起，您现有的积分值不够兑换本商品！';
$_LANG['notice_eg_integral'] = '积分商城商品需要消耗积分：';
$_LANG['eg_error_number'] = '对不起，该商品库存不足，现在不能兑换！';

/* 会员登录注册 */
$_LANG['member_name'] = '会員';
$_LANG['password'] = 'パスワード';
$_LANG['confirm_password'] = 'パスワードの再確認';
$_LANG['sign_up'] = '新規取得';
$_LANG['forgot_password'] = 'パスワードを忘れた';
$_LANG['hello'] = 'こんにちは！';
$_LANG['welcome_return'] = 'ようこそ。';
$_LANG['now_account'] = 'あなた様の口座の中で今ある';
$_LANG['balance'] = '残額';
$_LANG['along_with'] = '並びに';
$_LANG['preferential'] = '特典券';
$_LANG['edit_user_info'] = '会員センタに入る';
$_LANG['logout'] = 'ログアウト';
$_LANG['user_logout'] = 'ログアウト';
$_LANG['welcome'] = 'ようこそ！';
$_LANG['user_login'] = '会員登録';
$_LANG['login_now'] = 'すぐ登録';
$_LANG['reg_now'] = 'すぐ申請';

/* 商品品牌页 */
$_LANG['official_site'] = 'オフィシャルサイト：';
$_LANG['brand_category'] = '分類ブラウズ';
$_LANG['all_category'] = 'すべての分類';

/* 商品分类页 */
$_LANG['goods_filter'] = '商品篩い分ける';

/* cls_image类的语言项 */
$_LANG['directory_readonly'] = '目録 % がありません。あるいは書いてはいけない。';
$_LANG['invalid_upload_image_type'] = '写真の書式は間違った。';
$_LANG['upload_failure'] = 'ファイル %s のアップロードが失敗になった。';
$_LANG['missing_gd'] = '沒有安裝GD庫';
$_LANG['missing_orgin_image'] = '原始写真 %s　を探し出せない。 ';
$_LANG['nonsupport_type'] = 'この写真%sの書式を支持しない。  ';
$_LANG['creating_failure'] = '写真の創建が失敗になった。';
$_LANG['writting_failure'] = '写真の入力が失敗になった。';
$_LANG['empty_watermark'] = '水印のファイルのパラメーターがないことができない。';
$_LANG['missing_watermark'] = '水印のファイル%sが探し出せない。';
$_LANG['create_watermark_res'] = '水印写真資源の創建が失敗になった。水印写真のタイプは%sだ';
$_LANG['create_origin_image_res'] = '原始写真資源の創建が失敗になった。原始写真のタイプは%sだ';
$_LANG['invalid_image_type'] = '水印写真 %s は識別することができない  ';
$_LANG['file_unavailable'] = 'ファイル %s がありません。あるいは読んではいけない。';

/* 邮件发送错误信息 */
$_LANG['smtp_setting_error'] = 'メールサーバーの設置情報は完備していない。';
$_LANG['smtp_connect_failure'] = 'メールサーバーに連接できなくなった。 %s';
$_LANG['smtp_login_failure'] = 'メールサーバーの会員ID確認あるいはパスワードが間違った。';
$_LANG['smtp_refuse'] = 'サーバーはこのメールの発送を拒絶する';
$_LANG['sendemail_false'] = "メールの発送は失敗した。サイトの管理者に連絡してください。";
$_LANG['disabled_fsockopen'] = 'fsockopen関数の使用は禁止された。';

$_LANG['topic_goods_empty'] = 'いま特定テーマの商品がない。';
$_LANG['email_list_ok'] = '購読';
$_LANG['email_list_cancel'] = '購読取り消し';
$_LANG['email_invalid'] = 'メールアドレスが間違った。';
$_LANG['email_alreadyin_list'] = 'メールアドレスはすでにリストの中にある。';
$_LANG['email_notin_list'] = 'メールアドレスはリストの中にない。！';
$_LANG['email_re_check'] = 'すでにもう一度確認メールを発送した。査収して確認してください。';
$_LANG['email_check'] = 'ごメールを査収して確認操作をしてください!！';
$_LANG['email_not_alive'] = 'このメールアドレスが未確認ステータスだ。購読取り消しは要りない。';
$_LANG['check_mail'] = '確認メールだ。';
$_LANG['check_mail_content'] = "%s こんにちは。<br><br>これは%sより発送したメール購読の確認メールだ。ご確認操作を完成できるように以下のＵＲＬをクリックしてください。<br><a href=\"%s\" target=\"_blank\">%s</a>\n<br><br>%s<br>%s";
$_LANG['email_checked'] = 'メールはすでに確認された。';
$_LANG['hash_wrong'] = '暗証番号が間違った。暗証番号を確認してください。もしくは、メールアドレスを入力した後で当社から再度暗証番号を発送する。';
$_LANG['email_canceled'] = 'メールの購読はすでに取り消しされた。';
$_LANG['goods_click_count'] = "が注文しました";
$_LANG['p_y']['link_start'] = '<a href="http://www.ecshop.com" target="_blank" style=" font-family:Verdana; font-size:11px;">';
$_LANG['p_y']['link_p'] = 'Powe';
$_LANG['p_y']['link_r'] = 'red&nbsp;';
$_LANG['p_y']['link_b'] = 'by&nbsp;';
$_LANG['p_y']['main_start'] = '<strong><span style="color: #3366FF">';
$_LANG['p_y']['main_e'] = 'E';
$_LANG['p_y']['main_c'] = 'CSho';
$_LANG['p_y']['main_p'] = 'p</span>';
$_LANG['p_y']['v_s'] = '<span style="color: #FF9966">';
$_LANG['p_y']['v'] = VERSION;
$_LANG['p_y']['link_end'] = '</span></strong></a>';

/* 虚拟卡 */
$_LANG['card_sn'] = '卡片序号';
$_LANG['card_password'] = '卡片密码';
$_LANG['end_date'] = '截至日期';
$_LANG['virtual_card_oos'] = '虚拟卡已缺货';

/* 订单状态查询 */
$_LANG['invalid_order_sn'] = '無効な注文書';
$_LANG['order_status'] = '注文書狀態';
$_LANG['shipping_date'] = '出荷日';
$_LANG['query_order'] = 'この注文書を検索します';
$_LANG['order_query_toofast'] = '差し出す周波数はあまりに高いです。ちょっと休んだ後でまた検索してください。';

$_LANG['online_info'] = '今 %s人オンライン。';

/* 按钮 */
$_LANG['btn_direct_buy'] = '直接注文する';
$_LANG['btn_buy'] = '注文';
$_LANG['btn_collect'] = '収集する';
$_LANG['btn_store_pick'] = '店へ商品を取りに行く';
$_LANG['btn_add_to_cart'] = '買い物カゴに入れる';
$_LANG['btn_add_to_collect'] = 'お気に入りに追加';

$_LANG['stock_up'] = '品切れ';


$_LANG['hot_search'] = '人気のキーワード';

$_LANG['please_select_attr'] = '買い物カゴに入れる商品は異なる規格を選ぶことができる。商品を掲載するホームページに行って再び規格を選びたいですか？';

/* 促销信息栏 */
$_LANG['snatch_promotion'] = '[夺宝]';
$_LANG['group_promotion'] = '[团购]';
$_LANG['auction_promotion'] = '[拍卖]';
$_LANG['favourable_promotion'] = '[优惠]';
$_LANG['wholesale_promotion'] = '[批发]';
$_LANG['package_promotion'] = '[礼包]';

/* feed推送 */
$_LANG['feed_user_buy'] = "注文した";
$_LANG['feed_user_comment'] = "評論した";
$_LANG['feed_goods_price'] = "商品価格";
$_LANG['feed_goods_desc'] = "商品紹介";

/* 留言板 */
$_LANG['shopman_comment'] = '商品評論';
$_LANG['message_ping'] = '評';
$_LANG['message_board'] = "伝言板";
$_LANG['post_message'] = "伝言にする";
$_LANG['message_title'] = '主題';
$_LANG['message_time'] = '伝言の時間';
$_LANG['reply_time'] = '返事の時間';
$_LANG['shop_owner_reply'] = '当社の返事';
$_LANG['message_board_type'] = '伝言のタイプ';
$_LANG['message_content'] = '伝言の内容';
$_LANG['message_anonymous'] = '匿名の伝言';
$_LANG['message_type'][M_MESSAGE] = '伝言';
$_LANG['message_type'][M_COMPLAINT] = '不満の訴え';
$_LANG['message_type'][M_ENQUIRY] = '質問';
$_LANG['message_type'][M_CUSTOME] = '注文後';
$_LANG['message_type'][M_BUY] = '注文の前';
$_LANG['message_type'][M_BUSINESS] = '当社の伝言';
$_LANG['message_type'][M_COMMENT] = '評論';
$_LANG['message_board_js']['msg_empty_email'] = 'あなた様のメールアドレスを入力してください。';
$_LANG['message_board_js']['msg_error_email'] = 'メールアドレスの書式は正確ではない。';
$_LANG['message_board_js']['msg_title_empty'] = '伝言のタイトルを入力していない。';
$_LANG['message_board_js']['msg_content_empty'] = '伝言の内容を入力していない。';
$_LANG['message_board_js']['msg_captcha_empty'] = '確認コードがない。';
$_LANG['message_board_js']['msg_title_limit'] = '伝言のタイトルは200字を上回ることができない。';
$_LANG['message_submit_wait'] = '伝言の発表は成功になった。管理者の審査することを待ってください。';
$_LANG['message_submit_done'] = '伝言の発表は成功になった。';
$_LANG['message_board_close'] = "伝言板機能はしばらく停止する。";
$_LANG['upload_file_limit'] = 'ファイルサイズは%dKBの制限を上回る。';
$_LANG['message_list_lnk'] = '伝言のリストに戻す。';

/* 报价单 */
$_LANG['quotation'] = "オファーシート";
$_LANG['print_quotation'] = "オファーシートをコピーする";
$_LANG['goods_inventory'] = "庫存";
$_LANG['goods_category'] = "商品を探す";
$_LANG['shopman_reply'] = '管理員の返事';


/* 相册JS语言项 */
$_LANG['gallery_js']['close_window'] = 'このウィンドウを閉めることを確定しますか？';
$_LANG['submit'] = '差し出す';
$_LANG['reset'] = '置き換え';
$_LANG['order_query'] = '注文書を検索する';
$_LANG['shipping_query'] = '配送を検索する';
$_LANG['view_history'] = 'ブラウズした記録';
$_LANG['clear_history'] = '取り除く';
$_LANG['no_history'] = '近日ブラウズしたことがある商品はすでに取り除いた。';
$_LANG['goods_tag'] = '商品のラベル';
$_LANG['releate_goods'] = '関連の商品';
$_LANG['goods_list'] = '商品のリスト';
$_LANG['favourable_goods'] = 'この商品を収集する';
$_LANG['accessories_releate'] = '関連の付属品';
$_LANG['article_releate'] = '関連の文章';
$_LANG['email_subscribe'] = 'メール購読';
$_LANG['consignee_info'] = '受取人情報';
$_LANG['user_comment'] = '会員の評論';
$_LANG['total'] = '全部で';
$_LANG['user_comment_num'] = '条評論';
$_LANG['auction_goods'] = '商品をオークションする';
$_LANG['auction_goods_info'] = '商品をオークションする詳しい情報。';
$_LANG['article_cat'] = '文章の分類';
$_LANG['online_vote'] = 'オンラインで調査する';
$_LANG['new_price'] = '最新入札';
$_LANG['promotion_info'] = '特典の情報';
$_LANG['price_grade'] = '価格範囲';
$_LANG['your_choice'] = 'あなた様の選択';
$_LANG['system_info'] = 'システム情報';
$_LANG['all_tags'] = 'すべてラベル';
$_LANG['activity_list'] = 'イベントのリスト';
$_LANG['package_list'] = '禮包列表';
$_LANG['treasure_info'] = '商品の詳しい情報';
$_LANG['activity_desc'] = '活動描述';
$_LANG['activity_intro'] = 'イベントの紹介';
$_LANG['get_password'] = 'パスワードを忘れた';
$_LANG['fee_total'] = '料金合計';
$_LANG['other_info'] = '他の情報';
$_LANG['user_balance'] = '会員の残額';
$_LANG['wholesale_goods_cart'] = '卸売り商品の買い物カゴ';
$_LANG['wholesale_goods_list'] = '卸売り商品のリスト';
$_LANG['bid_record'] = '入札記録';
$_LANG['shipping_method'] = '配送方法';
$_LANG['payment_method'] = '支払方法';
$_LANG['goods_package'] = '商品包装';
$_LANG['goods_card'] = '祝福賀卡';
$_LANG['groupbuy_intro'] = '團購說明';
$_LANG['groupbuy_goods_info'] = '團購商品詳情';
$_LANG['act_time'] = '起止時間';
$_LANG['top10'] = 'TOP 10';
$_LANG['service_guarantee'] = 'サービス保障';

/* 优惠活动 */
$_LANG['label_act_name'] = '特典のイベント名：';
$_LANG['label_start_time'] = '特典開始時間：';
$_LANG['label_end_time'] = '特典終了時間：';
$_LANG['label_user_rank'] = '特典を享受する会員等級：';
$_LANG['not_user'] = '会員ない';
$_LANG['label_act_range'] = '特典範囲：';
$_LANG['far_all'] = 'すべて商品';
$_LANG['far_category'] = '以下の分類';
$_LANG['far_brand'] = '以下のブランド';
$_LANG['far_goods'] = '以下の商品';
$_LANG['label_min_amount'] = '金額下限：';
$_LANG['label_max_amount'] = '金額上限：';
$_LANG['notice_max_amount'] = '0＝上限ない';
$_LANG['label_act_type'] = '特典方式：';
$_LANG['fat_goods'] = '贈り物にする（特典品）';
$_LANG['fat_price'] = '現金を減免する';
$_LANG['fat_discount'] = '価格の割引にする';
$_LANG['orgtotal'] = '原始の価格';
$_LANG['heart_buy'] = '心が動くのは行動に及ばないだよ！';
$_LANG['activity_txt'] = 'イベントの企画';
$_LANG['activity_time'] = 'イベント企画の時間';

/* 其他模板涉及常用语言项 */
$_LANG['label_regist'] = '会員申請';
$_LANG['label_login'] = '会員登録';
$_LANG['label_profile'] = '会員情報';
$_LANG['label_collection'] = 'マイ収集';
$_LANG['article_list'] = '文章のリスト';
$_LANG['Preferences_price'] = '特典の価格';
$_LANG['divided_into'] = '分成規則';

//店铺街by wang
$_LANG['store_street'] = '店舗街';

$_LANG['no_goods_in_cart'] = "あなたのショッピングカートにアイテムはありません！";
$_LANG['no_consignee'] = "発送先住所を記入してください";
$_LANG['over_bind_limit'] = "バインドしようとしている格納された値カードは、この種類のカードのバインド制限を超えました！";

//瀑布流加载分类商品 by wu
$_LANG['add_to_cart'] = 'カートに加える';
$_LANG['sales_volume'] = '販売量';
$_LANG['compare'] = 'コントラスト';
$_LANG['collect'] = 'コレクション';
$_LANG['have_no_goods'] = '今在庫切れである';
$_LANG['select_attr'] = 'プロパティを選択してください';
$_LANG['order_wholesale_sms'] = '注文情報';

/* 众筹title */
$_LANG['crowdfunding'] = '众筹项目';
$_LANG['zc_search'] = '搜索众筹项目';
$_LANG['zc_order_info'] = '订单信息';
$_LANG['zc_order_submit'] = '订单提交';

/*门店 by kong 20160722*/
$_LANG['store_shortage'] = "对不起，该商品门店库存不足，请选择其他门店";


/*页面底部  by kong haojlj*/
$_LANG['Authentic_guarantee'] = "正品保証";
$_LANG['Rave_reviews'] = "最も賞賛される";
$_LANG['7_days_return'] = '七日払戻';
$_LANG['Lightning_delivery'] = '高速配送';
$_LANG['Authority_of_honor'] = '権威ある栄誉.';
$_LANG['Coupon_redemption_succeed'] = "コレクションが成功！ご参加ありがとうございます。";
$_LANG['coupons_prompt'] = "このアクティビティは、確率的なイベントであり、すべての顧客が正常にクーポンを受け取ることを保証することはできません";
$_LANG['Site_navigation'] = "ウェブサイトナビゲーション";
$_LANG['seller_store']  = 'ショップ';
$_LANG['all_goods_cat'] = "全商品カテゴリ";
$_LANG['Good_coupon_market'] = "好券集市";
$_LANG['task_mart'] = "任务集市";
$_LANG['presell_cat'] = "全部预售分类";
$_LANG['New_product_release'] = "新製品発売";
$_LANG['First_order'] = "優先購入";
$_LANG['piece_total'] = "件合計";
$_LANG['go_to_cart'] = "ショッピングカートへ";
$_LANG['Welcome_to'] = "ようこそ";
$_LANG['please_login'] = "登録";
$_LANG['registered'] = "登録";
$_LANG['download_prompt'] = "ダウンロードしたファイルが存在しません！";
$_LANG['flagship_store'] = '本店';
$_LANG['exclusive_shop'] = '支店';
$_LANG['franchised_store'] = '支店';
$_LANG['week'][1] = '月曜日';
$_LANG['week'][2] = '火曜日';
$_LANG['week'][3] = '水曜日';
$_LANG['week'][4] = '木曜日';
$_LANG['week'][5] = '金曜日';
$_LANG['week'][6] = '土曜日';
$_LANG['week'][7] = '日曜日';
$_LANG['table_prompt'] = "テーブル名またはテーブルのフィールド名は空にできません";
$_LANG['presell'] = "前売り";
$_LANG['gift_card_exchange'] = "ギフトカード交換";
$_LANG['project'] = "特集";
$_LANG['rec_txt'][1] = '通常';
$_LANG['rec_txt'][2] = '団体購入';
$_LANG['rec_txt'][3] = 'オークション';
$_LANG['rec_txt'][4] = '宝を奪う奇兵';
$_LANG['rec_txt'][5] = 'ポイントモール';
$_LANG['rec_txt'][6] = '前売り';
$_LANG['cat_list'] = 'ショッピングカート';
$_LANG['my_cart'] = '私のショッピングカート';
$_LANG['back'] = '戻る';
$_LANG['Since_some'] = "市自提点";
$_LANG['implement_time'] = "じっこうじかん：";
$_LANG['information_null'] = "申し訳ありませんが、対象となるデータは見つかりません";
$_LANG['Shopping_together_single'] = "购物凑单";
$_LANG['Contact_us'] = "お問い合わせ";
$_LANG['submit_goods'] = '提出する';
$_LANG['Mall_announcement'] = "商城公告";
$_LANG['System_cat'] = "系统分类";
$_LANG['Other_information'] = "其他信息";
$_LANG['Recent_popular'] = "近期热门";
$_LANG['View_larger'] = "查看大图";
$_LANG['general_audience'] = '満場共通';
$_LANG['Send_light'] = '送照明灯';
$_LANG['Jingdong_peisong'] = "京东配送";
$_LANG['Please_select'] = "请选择..";

/*20161214  start*/
$_LANG['View_details'] = "詳細の表示";
$_LANG['Browsing_record'] = "ブラウズレコード";
$_LANG['default'] = "默认";
$_LANG['is_new'] = '新着商品';
$_LANG['is_hot'] = '大売り出し';
$_LANG['is_best'] = '逸品';
$_LANG['Comment_number'] = "コメント数";
$_LANG['clear'] = "取り除く";
$_LANG['Receiving_land'] = "收货地";
$_LANG['Free_shipping'] = "送料無料";
$_LANG['Self_goods'] = "自营商品";
$_LANG['Grid_model'] = "グリッド・モード";
$_LANG['List_model'] = "リストモード";
$_LANG['Recent_browse'] = "最近のブラウズ";
$_LANG['tuiguang_goods'] = "大売り出し商品";
$_LANG['Popular_recommendation'] = "店長おすすめ";
$_LANG['torob_buy'] = "去抢购";
$_LANG['brand_goods'] = "品牌商品";
$_LANG['Enter_brand_page'] = "进入品牌页";
$_LANG['Prompt'] = "提示";
$_LANG['Cancel_attention'] = "取消关注";
$_LANG['check_all'] = '全选';
$_LANG['Share'] = "共有";
$_LANG['pic_count'] = "张图片";
$_LANG['cilck_view'] = "点击查看";
$_LANG['cilck_retract'] = "点击收起";
$_LANG['View_all_replies'] = "查看全部回复";
$_LANG['Collection_success'] = "您已成功收藏该商品！";
$_LANG['Collection_see'] = "您已成功收藏该商品！";
$_LANG['remove_goods_Collection'] = "您确定要将该商品从收藏夹中删除吗？";
$_LANG['cancel_grand'] = "您确定要取消关注该品牌吗？";
$_LANG['add_address_zc'] = "添加收货地址";
$_LANG['confirm_address_zc'] = "确定收货地址";
$_LANG['Basic_info_comp'] = "基本信息对比";
$_LANG['Model'] = "型号";
$_LANG['contrast_item'] = "暂无对比项";
$_LANG['compare_click_see'] = "点击这里折叠/展开";
$_LANG['compare_one'] = "点击取消固定";
$_LANG['compare_two'] = "取消高亮显示不同项";
$_LANG['compare_three'] = "高亮显示不同项";
$_LANG['compare_four'] = "显示相同项";
$_LANG['compare_five'] = "隐藏相同项";
$_LANG['add_consignee_address'] = '新規受取人住所';
$_LANG['edit_consignee_info'] = '受取人情報の編集';
$_LANG['remove_consignee_info'] = '受取人情報の削除';
$_LANG['Consignee'] = "受取人";
$_LANG['input_Consignee_name'] = "受取人の名前をご記入ください";
$_LANG['Local_area'] = '所在地';
$_LANG['address_info'] = "詳細アドレス";
$_LANG['input_address_info'] = "受取人の詳しい住所をご記入ください";
$_LANG['phone_con'] = "携帯番号";
$_LANG['Fixed_telephone'] = "固定電話";
$_LANG['input_contact'] = "受取人の連絡先をご記入ください";
$_LANG['con_email'] = "メールボックス";
$_LANG['con_email_input'] = "请您填写邮箱";
$_LANG['con_sign_building'] = '標誌建築';
$_LANG['inputcon_sign_building'] = '请您填写地址别名';
$_LANG['sign_building_desc'] = "書かなくてもいい'";
$_LANG['Zip_code'] = "郵便番号";
$_LANG['deliver_goods_time'] = '最優秀配達日時';
$_LANG['con_Preservation'] = '保存收货人信息';
$_LANG['goods_info'] = "商品情報";
$_LANG['shop_Price_dis'] = "商城价";
$_LANG['Evaluation_points'] = "评价分";
$_LANG['tiao_dis'] = "条";
$_LANG['Hot_topic'] = "热门话题";
$_LANG['hidden'] = '閉じる';
$_LANG['Contrast_bar'] = "比較バー";
$_LANG['Continue_add_dui'] = "追加を続行することもできます";
$_LANG['empty_contrast'] = '比較バーをクリア';
$_LANG['flow_info_lbi'] = "总价(不含运费)";
$_LANG['Selling_price'] = "售　　价";
$_LANG['selling_price_alt'] = "售价";
$_LANG['gs_number'] = '数　　量';
$_LANG['Rate'] = '好评';
$_LANG['zhong_p'] = '中评';
$_LANG['Bad'] = '差评'; 
$_LANG['share_flow'] = "分享";
$_LANG['existing'] = "已有";
$_LANG['No_goods'] = "无货";
$_LANG['Customer_service_p'] = "客服";
$_LANG['freight_p'] = '运费';
$_LANG['jian'] = "件";
$_LANG['seller_Grade']='商家等级';
$_LANG['brand_gm'] = '品&nbsp;&nbsp;&nbsp;&nbsp;牌';
$_LANG['Go_to_store'] = "进店逛逛";
$_LANG['go_see'] = "去看看";
$_LANG['Deliver_to'] = "送货至";
$_LANG['Sold'] = "売りさばく";
$_LANG['his_bi'] = "件";
$_LANG['go_shoping'] = "去购物";
$_LANG['Flash_sale'] = "限时抢购";
$_LANG['hour_two'] = '时';
$_LANG['minutes'] = '分';
$_LANG['seconds'] = '秒';
$_LANG['Rush_once'] = "立即抢";
$_LANG['rush_renshu'] = "人已抢购";
$_LANG['Brand_Street'] = "品牌街";
$_LANG['Mall_info'] = "商城资讯";
$_LANG['people_participate'] = "人已参加";
$_LANG['zhe'] = "折";
$_LANG['Group_purchase_end'] = "团购结束";
$_LANG['Group_purchase_now'] = "立即团";
$_LANG['End_pitch'] = "距结束";
$_LANG['Wait_shooting'] = "等待开拍";
$_LANG['Exchange_price'] = "换购价";
$_LANG['combo_markPrice'] = "参考价";
$_LANG['integral'] = '积分';
$_LANG['integral_coune'] = '人兑换';
$_LANG['exchange_now'] = '立即兑换';
$_LANG['Detailed_map'] = "详细地图";
$_LANG['Track'] = "宅配追跡 ";
$_LANG['View_all_orders'] = "すべてのオーダーの表示";
$_LANG['Distribution_limit'] = "商品暂时只支持配送至中国大陆地区";
$_LANG['payment_is_cod'] = '货到付款';
$_LANG['Classification_selection'] = "分类筛选";
$_LANG['successfully_added_shoping'] = "商品がカートに追加されました!";
$_LANG['cart_count'] = "ショッピングカートには";
$_LANG['Baby_total_amount'] = "商品総額";
$_LANG['cart_baby_success'] = "ショッピングバッグに正常に追加されました。";
$_LANG['zhong_boby'] = "種商品";
$_LANG['total_cart'] = '合計';
$_LANG['pay_to_cart'] = "カート決済";
$_LANG['Detailed_score'] = 'スコア詳細';
$_LANG['my_take_delivery'] = "私の船荷証券";
$_LANG['level_pos'] = "レ ベ ル";
$_LANG['temporary_no'] = "しばらく";
$_LANG['order_list'] = '私の注文';
$_LANG['My_assets'] = "私の資産";
$_LANG['My_footprint'] = '私の足跡'; 
$_LANG['Email_subscription'] = "メールアドレス";
$_LANG['Customer_service_center'] = "カスタマーセンター";
$_LANG['email_posi'] = "メールアドレスアカウントを入力してください";
$_LANG['Support_project'] = "支持项目";
$_LANG['Launch'] = "发起";
$_LANG['Support'] = '支持';
$_LANG['zc_see_content'] = "点击显示更多回复内容";
$_LANG['input_number_desc'] = "还可以输入";
$_LANG['zi_zc'] = "字";
$_LANG['zhuce'] = "新規取得(無料) ";
/*20161214  end*/

$_LANG['switch'] = "切换";
$_LANG['select_country'] = "选择国别";
$_LANG['different_countries'] = "配&nbsp;&nbsp;送";
$_LANG['click_countries'] = "点击切换国别";

$_LANG['by_stages'] = "分期";
$_LANG['Sun_to_single'] = "去晒单";
$_LANG['goods_null_cart'] = "カートにはまだ商品がございません";
$_LANG['sort'] = '排序';
$_LANG['value_card'] = "储值卡";
$_LANG['value_card_bind'] = "储值卡绑定";
$_LANG['in_value_card_bind'] = "已绑定储值卡";
$_LANG['value_card_instructions'] = "<h3>储值卡绑定与说明</h3>
                <p>1、在右侧输入储值卡卡号密码进行绑定</p>
                <p>2、请仔细查阅储值卡使用范围</p>";
$_LANG['wu'] = "无";	
$_LANG['checked_city'] = "切换城市";
$_LANG['hot_city'] = "热门城市";
$_LANG['sufficient'] = "充足";
$_LANG['only_leave'] = "仅剩";
$_LANG['time_shop'] = "到店时间";
$_LANG['take_time_desc'] = "默认为一天后的当前时间哦";
$_LANG['store_take_mobile'] = "请输入手机号码";
$_LANG['store_take_mobile_one'] = "手机号码将获取取货码订单哦";
$_LANG['address'] = '地址';
$_LANG['sales_hotline'] = "销售热线";
$_LANG['working_time'] = "工作时间";
$_LANG['change_choice'] = "更改选择";
$_LANG['change_choice_desc'] = "该地区暂无门店或属性没有库存";
$_LANG['select_store_info'] = "选择门店";
$_LANG['wu'] = "无";	
$_LANG['all_goods'] = '所有自营商品';
$_LANG['spec_cat'] = '指定分类';
$_LANG['spec_goods'] = '指定商品';		
$_LANG['all_goods_explain'] = '限平台自营商品使用';
$_LANG['spec_cat_explain'] = '限平台指定分类使用：% ';
$_LANG['spec_goods_explain'] = '限平台指定商品使用：<a href="javascript:;" onclick="specGoods()" style="color:red;" >点此查看</a>';	

$_LANG['label_mobile'] = '携帯番号';
$_LANG['get_verification_code_user'] = "获取短信校验码";
$_LANG['Un_bind'] = "解除绑定";
$_LANG['Immediately_verify'] = "立即验证";
$_LANG['package_nonumer'] = "对不起，该超值礼包已经库存不足。请选择其他礼包或者联系管理员！";
$_LANG['big_pic'] = "大きな画像";
$_LANG['Small_pic'] = "小きな画像";
$_LANG['pattern'] = "模式";
$_LANG['peer_comparison'] = "同行相比";
$_LANG['recommended_store'] = "推荐店铺";

$_LANG['update_Success'] = "更新成功！";
$_LANG['Submit_Success'] = "提交成功！";
$_LANG['Submit_fail'] = "提交失败，稍后在提交一次";

$_LANG['indate'] = '有効期間';
$_LANG['bonus_card_number'] = "カード番号";
$_LANG['keyong'] = "可用";
$_LANG['range_bonus'] = "范   围";
$_LANG['settled_down'] = "我要入驻";
$_LANG['settled_down_schedule_step'] = "进度查询";
$_LANG['Only_have_inventory'] = "在庫品の表示";
/* 秒杀活动 */
$_LANG['merchant_rec'] = "店铺推荐";

$_LANG['self_run'] = "自営する";
$_LANG['platform_self'] = '平台自营';

$_LANG['all_merchants'] = '所有店铺';
$_LANG['self_merchants'] = '自营店铺';
$_LANG['assign_merchants'] = '指定店铺';

$_LANG['overdue_login'] = '登陆过期，请重新登陆！';

$_LANG['no_address'] = '收货地址不能为空!';

//b2b
$_LANG['not_seller_user'] = '您不是商家用户，无权查看此页面!';
$_LANG['not_login_user'] = '您还没有登录，无权查看此页面!';

?>