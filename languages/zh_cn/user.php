<?php

/**
 * ECSHOP 用户中心语言项
 * ============================================================================
 * * 版权所有 2005-2017 上海商创网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecmoban.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: user.php 17217 2011-01-19 06:29:08Z liubo $
*/
$_LANG['illegal_operate'] = "誤動作";

$_LANG['progress'] = "進行速度";
$_LANG['use_limit'] = "制限 %s 使用可能";
$_LANG['user_surplus_pay'] = "会員センターオーダー残高支払い";

$_LANG['bind_login'] = '口座結合';
$_LANG['shop_reg_closed'] = '申し訳ありませんが、登録モジュールは現在開いていません.';

//@author guan start
$_LANG['to_paid'] = '送金';
$_LANG['label_single_sun'] = '評価';
$_LANG['single_success'] = '評価は正常に提出されました。レビューが通過すると、評価ページに表示されます。';
$_LANG['single_list_lnk'] = '評価リストページに戻る';
$_LANG['is_single'] = 'このオーダーは評価済みですので再選択してください';
$_LANG['order_sun_single'] = '評価';
$_LANG['back_page_up'] = '前のページに戻る';
$_LANG['back_page_list'] = '評価リストページに戻る';
$_LANG['invalid_img_url'] = '商品相册中图片格式不正确!';
$_LANG['invalid_goods_img'] = '商品图片格式不正确！'; 
$_LANG['invalid_goods_thumb'] = '商品缩略图格式不正确！';
$_LANG['invalid_img_url'] = '商品相册中图片格式不正确!';
$_LANG['goods_img_too_big'] = '商品图片文件太大了，无法上传。';
$_LANG['goods_thumb_too_big'] = '商品缩略图文件太大了，无法上传。';
$_LANG['img_url_too_big'] = '商品相册中第%s个图片文件太大了，无法上传。';
$_LANG['order_single'] = '订单不存在';
$_LANG['single_error'] = '上传失败，请检查填写信息是否正确';
$_LANG['comm_success'] = '您已发表，感谢您对我们的支持';
$_LANG['comm_error'] = '评论失败';
$_LANG['comm_content'] = '评论内容不能为空';
$_LANG['comm_is_user'] = '不能对自己评论';
//@author guan end

$_LANG['invalid_apply']     = 'あなたは未処理のアプリケーションを持っている。処理後に戻ってください！';

//退换货 start
$_LANG['return'] = '修理・返却申請';
$_LANG['return_apply'] = 'アフターサービスを申し込む';
$_LANG['user_return'] ='ユーザによって送り返される';
$_LANG['get_goods'] = '返品';
$_LANG['send_alone'] = '换货商品寄出(分单)';
$_LANG['send'] = '换货商品寄出';
$_LANG['refound'] = '已退款';
$_LANG['no_refound'] = '未退款';
$_LANG['complete'] = '完成';
$_LANG['label_return'] = '退换货订单';

$_LANG['edit_shipping_success'] = '您的退换货快递信息已成功更新！';
$_LANG['return_info'] = '返回退换货信息';
$_LANG['return_list_lnk'] = '我的退换货单列表';
$_LANG['return_exist'] = '该订单不存在！';
$_LANG['return_not_unconfirmed'] = '当前订单状态不是“用户寄回”。';
$_LANG['current_os_already_receive'] ='商家已收到退换货商品';
$_LANG['already_out_goods'] ='商家已发送图换货商品';
$_LANG['have_refound'] = "商家已退款";

$_LANG['rf'][RF_APPLICATION] = '由买家寄回';
$_LANG['rf'][RF_RECEIVE] =  '收到退换货';
$_LANG['rf'][RF_SWAPPED_OUT_SINGLE] =  '换出商品寄出【分单】';
$_LANG['rf'][RF_SWAPPED_OUT] =  '换出商品寄出';
$_LANG['rf'][RF_COMPLETE] =  '完成';   
$_LANG['rf'][REFUSE_APPLY] =  '申请被拒';
$_LANG['ff'][FF_REFOUND] = '已退款';
$_LANG['ff'][FF_NOREFOUND] = '未退款';
$_LANG['ff'][FF_NOMAINTENANCE] =  '未维修';
$_LANG['ff'][FF_MAINTENANCE] =  '已维修';
$_LANG['ff'][FF_NOEXCHANGE] =  '未换货';
$_LANG['ff'][FF_EXCHANGE] =  '已换货';
$_LANG['return_info'] = "退换货申请已提交";
$_LANG['only_return_money'] = '仅退款';
//退换货 end

//ecmoban模板堂 --zhuo start
$_LANG['cs'][OS_UNCONFIRMED] = '確認待ち';
$_LANG['cs'][CS_AWAIT_PAY] = '支払い待ち';
$_LANG['cs'][CS_AWAIT_SHIP] = '出荷待ち';
$_LANG['cs'][CS_TO_CONFIRM] = '商品を受け取る確認待ち';
$_LANG['cs'][CS_FINISHED] = '完了';
$_LANG['cs'][PS_PAYING] = '支払中';
$_LANG['cs'][OS_CANCELED] = 'キャンセル';
$_LANG['cs'][OS_INVALID] = '無効';
$_LANG['cs'][OS_RETURNED] = '返品';
$_LANG['cs'][OS_SHIPPED_PART] = '部分積載';
//ecmoban模板堂 --zhuo end

$_LANG['require_login'] = '不法な入り口。<br />よく操作したかったら，必ずログインしなければならない!';

$_LANG['no_records'] = '記録ない';
$_LANG['shot_message'] = "ショート。メッセージ";

/* 用户菜单 */
$_LANG['label_welcome'] = '歓迎のページ';
$_LANG['label_profile'] = '会員情報';
$_LANG['label_order'] = '私の注文書';
$_LANG['label_address'] = '私の配送先';
$_LANG['label_message'] = '私の伝言';
$_LANG['label_tag'] = '私のラベル';
$_LANG['label_collection'] = '私の収集';
$_LANG['label_bonus'] = '私の代金券';
$_LANG['label_coupons'] = '私のクーポン';
$_LANG['label_value_card'] = '我的储值卡';
$_LANG['label_comment'] = '私の評論';
$_LANG['label_affiliate'] = '私の推薦';
$_LANG['label_group_buy'] = '私の団体購入';
$_LANG['label_booking'] = '品切れ登録';
$_LANG['label_user_surplus'] = '資金管理';
$_LANG['label_track_packages'] = '荷物追跡';
$_LANG['label_transform_points'] = '積分両替';
$_LANG['label_auction'] = '拍卖活动';
$_LANG['label_snatch'] = '夺宝奇兵';
$_LANG['label_logout'] = 'Exit';

/* 会员余额(预付款) */
$_LANG['add_surplus_log'] = '口座明細照会';
$_LANG['view_application'] = '申請記録照会';
$_LANG['surplus_pro_type'] = 'タイプ';
$_LANG['repay_money'] = '現金を引き出す金額';
$_LANG['money'] = '金額';
$_LANG['points'] = '积分';
$_LANG['surplus_type_0'] = '預金';
$_LANG['surplus_type_1'] = '現金を引き出す';
$_LANG['deposit_money'] = '預金金額';
$_LANG['process_notic'] = '会員備考';
$_LANG['admin_notic'] = '管理者備考';
$_LANG['submit_request'] = '申請差し出す';
$_LANG['process_time'] = '操作時間';
$_LANG['use_time'] = '使用時間';
$_LANG['is_paid'] = 'ステータス';
$_LANG['is_confirm'] = '完了';
$_LANG['un_confirm'] = '未確認';
$_LANG['pay'] = '支払';
$_LANG['is_cancel'] = '取り消す';
$_LANG['account_inc'] = '増す';
$_LANG['account_dec'] = '減らす';
$_LANG['change_desc'] = '備考';
$_LANG['surplus_amount'] = 'あなた様の預金金額：';
$_LANG['payment_name'] = 'あなた様の選ぶ支払方式：';
$_LANG['payment_fee'] = '支払手数料：';
$_LANG['payment_desc'] = '支払方式の説明：';
$_LANG['current_surplus'] = '使用できる金額：';
$_LANG['unit_yuan'] = '円';
$_LANG['for_free'] = '贈り物無料';
$_LANG['surplus_amount_error'] = '申請の現金引き出しの金額が今の残高を上回った。この操作は行うことができない！';
$_LANG['surplus_appl_submit'] = '現金引き出しの申請はすでに差し出した。管理者の審査することを待ってください！';
$_LANG['process_false'] = '操作失敗、戻って再びしてみてください。';
$_LANG['confirm_remove_account'] = 'この記録を削除することを確定しますか？';
$_LANG['back_page_up'] = '前のページに戻す';
$_LANG['back_account_log'] = '口座明細のリストに戻す。';
$_LANG['amount_gt_zero'] = '「金額」柵の中で0以上の数を入力して下さい!';
$_LANG['select_payment_pls'] = '支払方式を選んでください。';

//JS语言项
$_LANG['account_js']['surplus_amount_empty'] = '操作する金額を入力してください。';
$_LANG['account_js']['surplus_amount_error'] = '入力した金額の書式が間違った。';
$_LANG['account_js']['process_desc'] = '今度操作の備考情報を入力してください。';
$_LANG['account_js']['payment_empty'] = '支払方式を選んでください。';

/* 缺货登记 */
$_LANG['oos_booking'] = '品切れ登録';
$_LANG['booking_goods_name'] = '注文商品名';
$_LANG['booking_amount'] = '注文数量';
$_LANG['booking_time'] = '登録時間';
$_LANG['process_desc'] = '備考処理';
$_LANG['describe'] = '注文明細';
$_LANG['contact_username'] = '連絡方';
$_LANG['contact_phone'] = '連絡電話';
$_LANG['submit_booking_goods'] = '品切れ登録を差し出す';
$_LANG['booking_success'] = 'ご注文書はすでに受付になった。';
$_LANG['booking_rec_exist'] = 'この商品は品切れ登録をしたことがある。';
$_LANG['back_booking_list'] = '品切れ登録のりすとに戻す。';
$_LANG['not_dispose'] = '未処理';
$_LANG['no_goods_id'] = '商品IDを指定してください。';

//JS语言项
$_LANG['booking_js']['booking_amount_empty'] = 'ご注文の商品数量を入力してください。';
$_LANG['booking_js']['booking_amount_error'] = '数量の書式が間違った。';
$_LANG['booking_js']['describe_empty'] = '何か要望があったら、入力してください。';
$_LANG['booking_js']['contact_username_empty'] = '連絡先のお名前を入力ｈしてください。';
$_LANG['booking_js']['email_empty'] = '連絡先のメールアドレスを入力ｈしてください。';
$_LANG['booking_js']['email_error'] = 'メールアドレスの書式が間違った。';
$_LANG['booking_js']['contact_phone_empty'] = '連絡先の電話番号を入力ｈしてください。';

/* 个人资料 */
$_LANG['confirm_submit'] = '　確　定　';
$_LANG['member_rank'] = '会員の等級';
$_LANG['member_discount'] = '会員の割引';
$_LANG['rank_integral'] = '等級の積分';
$_LANG['consume_integral'] = '消費の積分';
$_LANG['account_balance'] = '口座の残額';
$_LANG['user_bonus'] = '会員のボーナス';
$_LANG['user_bonus_info'] = '合計 %d 個,価値 %s';
$_LANG['not_bonus'] = 'ボーナスない';
$_LANG['add_user_bonus'] = '1つボーナスを添加する';
$_LANG['bonus_number'] = 'ボーナスのシリアルナンバー';
$_LANG['old_password'] = 'もとパスワード';
$_LANG['new_password'] = '新しいパスワード';
$_LANG['confirm_password'] = '新しいパスワードを確認する';
$_LANG['bonus_sn_exist'] = 'このボーナスはすでに使用された。';
$_LANG['bonus_sn_not_exist'] = '代金券番号は存在しません！';
$_LANG['add_bonus_sucess'] = '代金券を受け取りました！';
$_LANG['add_bonus_false'] = '新しい代金券失敗を増加します！';
$_LANG['not_login'] = '会員は登録していないので、操作することができません。';
$_LANG['profile_lnk'] = '私の個人資料';
$_LANG['edit_email_failed'] = 'メールアドレスを編集することが失敗した。';
$_LANG['edit_profile_success'] = '個人資料修正完了した。';
$_LANG['edit_profile_failed'] = '個人資料を修正することが失敗した。';
$_LANG['oldpassword_error'] = 'パスワードが間違った。確認後、も一度入力してください。';

//JS语言项
$_LANG['profile_js']['bonus_sn_empty'] = '代金券の番号を入力してください！';
$_LANG['profile_js']['bonus_sn_error'] = '代金券の番号の書式を入力するのは正しくありません！';

$_LANG['profile_js']['email_empty'] = 'メールアドレスを入力してください。';
$_LANG['profile_js']['email_error'] = '入力したメールアドレスの書式が間違った。';
$_LANG['profile_js']['old_password_empty'] = 'もとパスワードを入力してください。';
$_LANG['profile_js']['new_password_empty'] = '新しいパスワードを入力してください。';
$_LANG['profile_js']['confirm_password_empty'] = 'も一度新しいパスワードを入力してください。';
$_LANG['profile_js']['both_password_error'] = '2回の入力のパスワードは異なる!';
$_LANG['profile_js']['msg_blank'] = 'なくなることができません。';
$_LANG['profile_js']['no_select_question'] = '- パスワードの提示問題の操作は完成していない。';
$_LANG['profile_js']['phone_empty'] = 'あなたの携帯電話番号を入力してください！';
$_LANG['profile_js']['phone_error'] = 'あなたが入力した携帯電話番号の形式は正しくないです！';

/* 支付方式 */
$_LANG['pay_name'] = '支払方式';
$_LANG['pay_desc'] = '明細';
$_LANG['pay_fee'] = '手数料';

/* 收货地址 */
$_LANG['consignee_name'] = '受取人';
$_LANG['country_province'] = '配送';
$_LANG['please_select'] = '選んでください';
$_LANG['city_district'] = '県/市';
$_LANG['email_address'] = 'メールアドレス';
$_LANG['detailed_address'] = '配送住所';
$_LANG['postalcode'] = '郵便番号';
$_LANG['phone'] = '電話番号';
$_LANG['mobile'] = "携帯電話";
$_LANG['backup_phone'] = "携帯電話";
$_LANG['sign_building'] = '標誌建築';
$_LANG['deliver_goods_time'] = '最佳送貨時間';
$_LANG['default'] = '黙認';
$_LANG['default_address'] = '黙認住所';
$_LANG['yes'] = 'はい';
$_LANG['no'] = 'いいえ';
$_LANG['country'] = '国';
$_LANG['province'] = '県';
$_LANG['city'] = '市';
$_LANG['area'] = '町村';

$_LANG['search_ship'] = 'サポートするの配送方法';

$_LANG['del_address_false'] = '配送住所を削除することが失敗した';
$_LANG['add_address_success'] = '新しい配送住所が添加完了した。';
$_LANG['edit_address_success'] = '配送住所情報が更新完了した。';
$_LANG['address_list_lnk'] = '住所リストに戻す';
$_LANG['add_address'] = '新しい配送住所を添加する';
$_LANG['confirm_edit'] = '修正確認';

$_LANG['confirm_drop_address'] = '配送住所を削除することが確認ですか？';

/* 会员密码找回 */
$_LANG['username_and_email'] = '会員名と申請の時使用したメールアドレスを入力してください。';
$_LANG['enter_new_password'] = '新しいパスワードを入力してください。';
$_LANG['username_no_email'] = '会員名かメールアドレスは間違った。もう一度入力してください。';
$_LANG['fail_send_password'] = 'メールを送ることが間違った。管理者に連絡してください。';
$_LANG['send_success'] = '再びパスワードを設けるメールはすでにあなた様のメールアドレスへ発送した';
$_LANG['parm_error'] = 'パラメーターが間違った。戻してください。';
$_LANG['edit_password_failure'] = '入力したもとパスワードが間違った。';
$_LANG['edit_password_success'] = '新しいパスワードが更新成功した。';
$_LANG['username_not_match_email'] = '会員名かメールアドレスは間違った。もう一度入力してください。';
$_LANG['get_question_username'] = 'パスワードの提示問題を獲得するため、会員名を入力して下さい。';
$_LANG['no_passwd_question'] = 'パスワードの提示問題を設けていない。このような方法を通じてパスワードを探し出すことができない。';
$_LANG['input_answer'] = 'パスワードの提示問題の解答を入力してください。';
$_LANG['wrong_passwd_answer'] = '提示問題の解答が間違った。';

//JS语言项
$_LANG['password_js']['user_name_empty'] = '会員名を入力してください。';
$_LANG['password_js']['email_address_empty'] = 'メールアドレスを入力してください。！';
$_LANG['password_js']['phone_address_empty'] = '携帯番号を入力してください！';
$_LANG['password_js']['phone_address_empty_11'] = '正しい11桁の携帯番号を入力してください！';
$_LANG['password_js']['phone_address_empty_bzq'] = '入力した携帯番号が正しくありません！';
$_LANG['password_js']['wenti_address_empty'] = '登録に関する質問を入力してください！';
$_LANG['password_js']['email_address_error'] = 'メールアドレスの書式が間違った。';
$_LANG['password_js']['new_password_empty'] = '新しいパスワードを入力してください！';
$_LANG['password_js']['confirm_password_empty'] = '確認パスワードを入力してください！';
$_LANG['password_js']['both_password_error'] = '2回入力したパスワードが一致しません！';

/* 会员留言 */
$_LANG['message_title'] = 'タイトル';
$_LANG['message_time'] = '伝言時間';
$_LANG['reply_time'] = '返事時間';
$_LANG['shopman_reply'] = '当社の返事';
$_LANG['send_message'] = '伝言を発表する';
$_LANG['message_type'] = '伝言のタイプ';
$_LANG['message_content'] = '伝言の内容';
$_LANG['submit_message'] = '伝言を差し出す';
$_LANG['upload_img'] = 'ファイルをアップロードする';
$_LANG['img_name'] = '写真名';

/* 留言类型 */
$_LANG['type'][M_MESSAGE] = '伝言';
$_LANG['type'][M_COMPLAINT] = '不満通報';
$_LANG['type'][M_ENQUIRY] = '質問';
$_LANG['type'][M_CUSTOME] = '注文後';
$_LANG['type'][M_BUY] = '購入';
$_LANG['type'][M_BUSINESS] = '当社伝言';

$_LANG['add_message_success'] = '伝言発表完了した。';
$_LANG['message_list_lnk'] = '伝言リストに戻す。';
$_LANG['msg_title_empty'] = '伝言のタイトルがない。';
$_LANG['upload_file_limit'] = 'ファイルサイズは%dKB制限を上回った。 ';

$_LANG['img_type_tips'] = '<font color="red">注意：</font>';
$_LANG['img_type_list'] = '以下の書式のファイルをアップロードすることができます：<br />gif、jpg、png、word、excel、txt、zip、ppt、pdf';
$_LANG['view_upload_file'] = 'アップロードしたファイルを調べる';
$_LANG['upload_file_type'] = 'アップロードしたファイルの書式が間違った。確認後、もう一度アップロードしてください。';
$_LANG['upload_file_error'] = 'ファイルのアップロードが問題があった。もう一度アップロードしてください。';
$_LANG['message_empty'] = 'あなた様はまだ伝言していない。';
$_LANG['msg_success'] = '伝言完了した。';
$_LANG['confirm_remove_msg'] = 'この伝言を削除することが確認ですか？';

/* 会员红包 */
$_LANG['bonus_is_used'] = 'すでに受け取りました';
$_LANG['bonus_is_used_by_other'] = '代金券の番号を入力してその他のユーザーに受け取られました！';
$_LANG['bonus_add_success'] = '新しい代金券を増加しました！';
$_LANG['bonus_not_exist'] = '入力したの代金券は存在しません';
$_LANG['user_bonus_empty'] = 'まだ代金券がありません';
$_LANG['add_bonus_sucess'] = '代金券を受け取りました！';
$_LANG['add_bonus_false'] = '新しい代金券失敗を増加します！';
$_LANG['bonus_add_expire'] = '代金券はすでに期限が切れました！';
$_LANG['bonus_use_expire'] = 'この代金券はすでに過ぎて時間を使いました！';
/* 储值卡 */
$_LANG['no_use_record'] = '储值卡暂时没有使用记录';
$_LANG['add_value_card_sucess'] = '绑定储值卡操作成功！';
$_LANG['add_value_card_false'] = '绑定储值卡操作失败！';
$_LANG['vc_is_used'] = '您已绑定此储值卡！';
$_LANG['vc_is_used_by_other'] = '您输入的储值卡已被其他用户绑定！';
$_LANG['vc_not_exist'] = '您输入的储值卡账号或密码错误！';
$_LANG['vc_use_expire'] = '该储值卡已经过使用期！';
$_LANG['vc_no_use_order'] = '该储值卡无法用于此订单！';
$_LANG['vc_use_inspire'] = '该储值卡还未开始使用！';
$_LANG['vc_limit_expire'] = '超出此类储值卡可绑定张数限制！';

/* 充值卡 */
$_LANG['pc_is_used'] = '此充值卡已被使用！';
$_LANG['pc_use_expire'] = '此充值卡已经过使用期！';
$_LANG['use_pay_card_sucess'] = '使用充值卡操作成功！';
$_LANG['pc_not_exist'] = '您输入的充值卡不存在！';

/* 会员订单 */
$_LANG['order_list_lnk'] = '私の注文書リスト';
$_LANG['order_number'] = '注文書号';
$_LANG['order_addtime'] = '注文時間';
$_LANG['order_money'] = '注文金額合計';
$_LANG['order_status'] = '注文ステータス';
$_LANG['first_order'] = '主注文書';
$_LANG['second_order'] = '従注文書';
$_LANG['merge_order'] = '注文書合併';
$_LANG['no_priv'] = 'あなた様は他の人の注文書を操作する権限がない';
$_LANG['buyer_cancel'] = '会員取り消す';


$_LANG['cancel'] = '注文書を取り消す';
$_LANG['pay_money'] = '支払';
$_LANG['view_order'] = '注文書を調べる';
$_LANG['received'] = '受け取り確認';
$_LANG['ss_received'] = '完了した';

//ecmoban模板堂 --zhuo start
$_LANG['wait_pay'] = '支払い待ち';
$_LANG['shipping_single'] = '部分分单';
//ecmoban模板堂 --zhuo end

$_LANG['confirm_cancel'] = 'この注文書を取り消すことが確認ですか？';
$_LANG['merge_ok'] = '注文書合併完成です';
$_LANG['merge_invalid_order'] = 'すみません。あなた様は選ぶ注文書が合併できない。';
$_LANG['select'] = '選んでください。';
$_LANG['order_not_pay'] = "注文書ステータス %sです。支払が要りない。";
$_LANG['order_sn_empty'] = '合併主注文書号があらなければならない。';
$_LANG['merge_order_notice'] = '注文書合併は配送する前に、同じステータスの注文書は1つの新しい注文書まで合併するのです。<br />配送先と配送方式などは主注文書の配送先などになる。';
$_LANG['order_exist'] = 'この注文書がない';

$_LANG['order_is_auction'] = '[拍卖活动]';
$_LANG['order_is_seckill'] = '[秒杀活动]';
$_LANG['order_is_snatch'] = '[夺宝奇兵]';
$_LANG['order_is_group_buy'] = '[團購]';
$_LANG['gb_deposit'] = '（保證金）';
$_LANG['order_is_exchange'] = '[積分商城]';
$_LANG['notice_gb_order_amount'] = '（備註：團購如果有保證金，第一次只需支付保證金和相應的支付費用）';
$_LANG['business_message'] = '送信!/業者の伝言を見る';
$_LANG['pay_order_by_surplus'] = '残高を使って注文書を支払う：%s';
$_LANG['return_surplus_on_cancel'] = '注文書を取り消す %s，注文書を支払する時使った預金を戻す。';
$_LANG['return_integral_on_cancel'] = '注文書を取り消す %s，注文書を支払する時使った積分を戻す。';


/* 订单状态 */
$_LANG['os'][OS_UNCONFIRMED] = '未確認';
$_LANG['os'][OS_CONFIRMED] = '確認完了';
$_LANG['os'][OS_SPLITED] = '確認完了';
$_LANG['os'][OS_SPLITING_PART] = '確認完了';
$_LANG['os'][OS_CANCELED] = '取り消し完了';
$_LANG['os'][OS_INVALID] = '無効';
$_LANG['os'][OS_RETURNED] = '返品';
$_LANG['os'][OS_ONLY_REFOUND] = '払い戻しのみ';
$_LANG['os'][OS_RETURNED_PART] = '一部の商品は返品済みです';

$_LANG['ss'][SS_UNSHIPPED] = '未配送';
$_LANG['ss'][SS_PREPARING] = '配送中';
$_LANG['ss'][SS_SHIPPED] = '配送完了';
$_LANG['ss'][SS_RECEIVED] = '受取確認';
$_LANG['ss'][SS_SHIPPED_PART] = '配送完了(一部の商品)';
$_LANG['ss'][SS_SHIPPED_ING] = '配送中'; // 已分單

$_LANG['ps'][PS_UNPAYED] = '未支払';
$_LANG['ps'][PS_PAYING] = '支払中';
$_LANG['ps'][PS_PAYED] = '支払完了';
$_LANG['ps'][PS_PAYED_PART] = '小口払い!(手付金)';
$_LANG['ps'][PS_REFOUND] = '返金済み';
//ecmoban模板堂 --zhuo start

//ecmoban模板堂 --zhuo end

$_LANG['shipping_not_need'] = '配送方式を使う必要はない。';
$_LANG['current_os_not_unconfirmed'] = 'この注文書ステータスは「未確認」ではない。';
$_LANG['current_os_already_confirmed'] = 'この注文書は既に確認された。取り消しできない。当社に連絡してください。';
$_LANG['current_ss_not_cancel'] = '未配送ステータスでなければ,取り消しできない。当社に連絡してもいいです。';
$_LANG['current_ps_not_cancel'] = '未支払ステータスでなければ,取り消しできない。取り消ししたかったら、当社に連絡してください。';
$_LANG['confirm_received'] = 'すでに品物を受け取ったことを確認したか？';

/* 合并订单及订单详情 */
$_LANG['merge_order_success'] = '注文書合併の操作が完了した。';
$_LANG['merge_order_failed']  = '注文書合併の操作が失敗した。も一度操作してください。';
$_LANG['order_sn_not_null'] = '合併したい注文書号を入力してください。';
$_LANG['two_order_sn_same'] = '合併したい２個の注文書号は同じになることができない。';
$_LANG['order_not_exist'] = "注文書 %s がない。";
$_LANG['os_not_unconfirmed_or_confirmed'] = " %s の注文書ステータスは「未確認」か「確認完了」ではない。";
$_LANG['ps_not_unpayed'] = "注文書 %s の支払ステータスは「未支払」ではない。";
$_LANG['ss_not_unshipped'] = "注文書 %s の配送ステータスは「未配送」ではない。";
$_LANG['order_user_not_same'] = '合併したい２個の注文書は一つの会員の注文書ではない。';
$_LANG['from_order_sn'] = '1番目注文書号：';
$_LANG['to_order_sn'] = '２番目注文書号：';
$_LANG['merge'] = '合併';
$_LANG['notice_order_sn'] = '２個の注文書号が同じでない時、合併後の注文書情報（支払方式や配送方式なだ）は2番目になる。';
$_LANG['subtotal'] = '合計';
$_LANG['goods_price'] = '商品の価格';
$_LANG['goods_attr'] = "商品規格とその他";
$_LANG['use_balance'] = '残高を使う。';
$_LANG['order_postscript'] = '注文要望';
$_LANG['order_number'] = '注文書号';
$_LANG['consignment'] = '送り状';
$_LANG['shopping_money'] = '商品代金合計';
$_LANG['invalid_order_id'] = '注文書号が間違った。';
$_LANG['shipping'] = '配送方式';
$_LANG['payment'] = '支払方式';
$_LANG['use_pack'] = '使用包装';
$_LANG['use_card'] = '使用賀卡';
$_LANG['order_total_fee'] = '注文書の合計金額';
$_LANG['order_money_paid'] = 'すでに支払う金額';
$_LANG['order_amount'] = '未支払金額';
$_LANG['accessories'] = '付属品';
$_LANG['largess'] = '贈り物';
$_LANG['use_more_surplus'] = '残高を使って支払う';
$_LANG['max_surplus'] = '（口座の残高：%s）';
$_LANG['button_submit'] = '確定';
$_LANG['order_detail'] = '詳しい情報';
$_LANG['error_surplus_invalid'] = '入力の数字は正しくない';
$_LANG['error_order_is_paid'] = 'この注文書は支払う必要がない';
$_LANG['error_surplus_not_enough'] = '口座の残高は不足だ';

/* 订单状态 */
$_LANG['detail_order_sn'] = '注文書号';
$_LANG['detail_order_status'] = '注文書ステータス';
$_LANG['detail_pay_status'] = '支払ステータス';
$_LANG['detail_shipping_status'] = '配送ステータス';
$_LANG['detail_order_sn'] = '注文書号';
$_LANG['detail_to_buyer'] = '当社伝言';

$_LANG['confirm_time'] = '%sに確認 ';
$_LANG['pay_time'] = '%sに支払';
$_LANG['shipping_time'] = '%sに配送';

$_LANG['select_payment'] = '選んだ支払方式';
$_LANG['order_amount'] = '支払金額';
$_LANG['update_address'] = '受取人情報を更新する';
$_LANG['virtual_card_info'] = '虛擬卡信息';
$_LANG['virtual_goods_info'] = '查看卡密';

/* 取回密码 */
$_LANG['back_home_lnk'] = 'ホームページに戻す。';
$_LANG['get_password_lnk'] = 'パスワードを獲得するホームページに戻す。';
$_LANG['get_password_by_question'] = "パスワードの提示問題によってパスワードを取り返す";
$_LANG['get_password_by_mail'] = "登録されたメールアドレスによってパスワードを取り返す";
$_LANG['back_retry_answer'] = '戻って再び試みる。';

/* 登录 注册 */
$_LANG['label_username'] = '会員名';
$_LANG['label_email'] = 'Ｅ－ｍａｉｌ';
$_LANG['label_password'] = 'パスワード';
$_LANG['label_confirm_password'] = '確認パスワード';
$_LANG['label_password_intensity'] = 'パスワードの安全性';
$_LANG['want_login'] = '会員IDをお持ちの方、ログインする';
$_LANG['other_msn'] = 'MSN';
$_LANG['other_qq'] = 'QQ';
$_LANG['other_office_phone'] = '執務電話';
$_LANG['other_home_phone'] = '家庭電話';
$_LANG['other_mobile_phone'] = "携帯電話";
$_LANG['remember'] = '私の今度の登録情報を保存してください。';

$_LANG['msg_un_blank'] = '会員名を入力しなければならない。';
$_LANG['msg_un_length'] = '会員名は１４文字以内の半角英数字でなければならない。';
$_LANG['msg_un_format'] = '会員名に無効な文字列が含まれています。';
$_LANG['msg_un_registered'] = 'この会員名は登録されたことがある。使用できない。';
$_LANG['msg_can_rg'] = '使用可能です。';
$_LANG['msg_email_blank'] = 'メールアドレスを入力しなければならない。';
$_LANG['msg_email_registered'] = 'このメールアドレスは登録されたことがある。使用できない。';
$_LANG['msg_email_format'] = '無効なメールアドレスです。';

$_LANG['msg_phone_blank'] = '携帯番号は必ず記入してください';
$_LANG['msg_phone_registered'] = '携帯電話は既に存在しますので、再入力してください';
$_LANG['msg_phone_invalid'] = '無効な携帯番号';
$_LANG['msg_phone_not_correct'] = '携帯番号が正しくありませんので、再入力してください';
$_LANG['msg_mobile_code_blank'] = '携帯電話の証明書番号は空にできません';
$_LANG['msg_mobile_code_not_correct'] = '携帯電話の認証コードが正しくありません';
$_LANG['msg_mobile_mobile_code'] = '携帯電話のダイナミックコードは空または無効にできません';
$_LANG['msg_mobile_invalid'] = '%s 無効な携帯番号';

$_LANG['msg_confirm_pwd_blank'] = 'パスワードが空でないことを確認';

$_LANG['msg_identifying_code'] = '認証コードが空ではありません';
$_LANG['msg_identifying_not_correct'] = '認証コードが正しくありません';

$_LANG['login_success'] = '登録完成';
$_LANG['confirm_login'] = '登録確認';
$_LANG['profile_lnk'] = '私の個人情報';
$_LANG['login_failure'] = "<i class='iconfont icon-minus-sign'></i>員名かパスワードが間違った。";
$_LANG['relogin_lnk'] = '再びログイン';

$_LANG['sex'] = 'ジェンダー';
$_LANG['male'] = '男';
$_LANG['female'] = '女';
$_LANG['secrecy'] = '秘密';
$_LANG['birthday'] = '生年月日';

$_LANG['logout'] = 'ログアウト完了した。';
$_LANG['username_empty'] = '会員名がない。';
$_LANG['username_invalid'] = '会員名 %s は敏感な文字を含む。';
$_LANG['username_exist'] = '会員名 %s すでに使用された。';
$_LANG['phone_exist'] = '携帯番号 %s は既に存在します';
$_LANG['username_not_allow'] = '会員名 %s は登録を許しません。';
$_LANG['confirm_register'] = '登録確認';

$_LANG['agreement'] = "《<a href=\"article.php?cat_id=-1\" style=\"color:blue\" target=\"_blank\">利用規約に同意する</a>》";

$_LANG['email_empty'] = 'メールアドレスがない。';
$_LANG['email_invalid'] = '%s が無効なメールアドレスです。';
$_LANG['email_exist'] = '%s がでに使用された。';
$_LANG['email_not_allow'] = 'メールアドレス %s は登録を許しません。';
$_LANG['register'] = '新規取得';
$_LANG['register_success'] = '会員名 %s は登録完了した。';

$_LANG['passwd_question'] = 'パスワードの提示問題';
$_LANG['sel_question'] = '提示問題を選んでください。';
$_LANG['passwd_answer'] = '提示問題の解答';
$_LANG['passwd_balnk'] = 'パスワードの中で空欄を含むことができない。';

/* 用户中心默认页面 */
$_LANG['welcome_to'] = 'ようこそ！';
$_LANG['last_time'] = '前回の登録時間';
$_LANG['your_account'] = '口座';
$_LANG['your_notice'] = '会員注意';
$_LANG['your_surplus'] = '残高';
$_LANG['credit_line'] = '信用限度額';
$_LANG['your_bonus'] = '代金券';
$_LANG['your_message'] = '伝言';
$_LANG['your_order'] = '注文書';
$_LANG['your_integral'] = '積分';
$_LANG['your_level'] = 'あなた様の等級 %sです。 ';
$_LANG['next_level'] = ',您還差 %s 積分達到 %s ';
$_LANG['attention'] = 'ウォッチリスト.';
$_LANG['no_attention'] = 'ウォッチリストを取り消す.';
$_LANG['del_attention'] = '取り消しが確認ですか？';
$_LANG['add_to_attention'] = 'この商品をウォッチリストに追加するのが確認ですか？';
$_LANG['label_need_image'] = '写真を表示しますか？';
$_LANG['need'] = '表示';
$_LANG['need_not'] = '表示しない';
$_LANG['horizontal'] = '横方向順列';
$_LANG['verticle'] = '縦方向順列';
$_LANG['generate'] = 'コードを作る';
$_LANG['label_goods_num'] = '商品数量を表示する：';
$_LANG['label_arrange'] = '並べ替え：';
$_LANG['label_rows_num'] = '表示商品件目数：';
$_LANG['label_charset'] = '選擇編碼：';
$_LANG['charset']['utf8'] = '國際化編碼（utf8）';
$_LANG['charset']['zh_cn'] = '簡體中文';
$_LANG['charset']['zh_tw'] = '繁體中文';
$_LANG['goods_num_must_be_int'] = '商品数量は必ず整数でなければならない。';
$_LANG['goods_num_must_over_0'] = '商品数量は必ず0より大きくなければならない。';
$_LANG['rows_num_must_be_int'] = '表示商品件目数は必ず整数でなければならない。';
$_LANG['rows_num_must_over_0'] = '表示商品件目数は必ず0より大きくなければならない。';

$_LANG['last_month_order'] = 'あなた様は最近30日以内に差し出ししました。';
$_LANG['order_unit'] = '個注文書';
$_LANG['please_received'] = '以下の注文書は既に配送しました。ご査収下さい。';
$_LANG['your_auction'] = 'あなた様は<strong>%s</strong>を入札しました。 ，今は <a href="auction.php?act=view&amp;id=%s">へ<span style="color:#06c;text-decoration:underline;">へ購入に行きます。</span></a>';
$_LANG['your_snatch'] = '您奪寶奇兵竟拍到了<strong>%s</strong> ，現在去 <a href="snatch.php?act=main&amp;id=%s"><span style="color:#06c;text-decoration:underline;">購買</span></a>';

/* 我的标签 */
$_LANG['no_tag'] = 'しばらくラベルがない。';
$_LANG['confirm_drop_tag'] = 'このラベルを削除することを確定しますか？';

/* user_passport.dwt js语言文件 */
$_LANG['passport_js']['username_empty'] = '- 会員名を入力しなければならない。';
$_LANG['passport_js']['username_shorter'] = '- 会員名は3文字以上でなければならない。';
$_LANG['passport_js']['username_invalid'] = '- 会員名は４～14文字の半角英数字,記号（アンダーバー「＿」のみ）です。';
$_LANG['passport_js']['password_empty'] = '- パスワードを入力しなければならない。';
$_LANG['passport_js']['password_shorter'] = '- パスワードは6文字以上でなければならない。';
$_LANG['passport_js']['confirm_password_invalid'] = '- パスワードが一致していません。';
$_LANG['passport_js']['email_empty'] = '- メールアドレスを入力しなければならない。';
$_LANG['passport_js']['email_invalid'] = '- 無効なメールアドレスです';
$_LANG['passport_js']['agreement'] = '- まだ利用規約に同意しないです。';
$_LANG['passport_js']['msn_invalid'] = '- 無効なＭＳＮアドレスです';
$_LANG['passport_js']['qq_invalid'] = '- 無効なＱＱ号です';
$_LANG['passport_js']['home_phone_invalid'] = '- 家庭電話は無効な番号です。';
$_LANG['passport_js']['office_phone_invalid'] = '- 執務電話は無効な番号です。';
$_LANG['passport_js']['mobile_phone_invalid'] = "- 携帯電話は無効な番号です。";
$_LANG['passport_js']['msg_un_blank'] = '* ４～14文字の半角英数字,記号（アンダーバー「＿」のみ）で入力してください。';
$_LANG['passport_js']['msg_un_length'] = '* 会員名は14文字以内の半角英数字でなければならない。';
$_LANG['passport_js']['msg_un_format'] = '* 会員名は使用禁止の文字を含んでいます。';
$_LANG['passport_js']['msg_un_registered'] = '* 会員名はすでに使われている。その他の会員名に変更してみます。';
$_LANG['passport_js']['msg_can_rg'] = '* 使用可能です。';
$_LANG['passport_js']['msg_email_blank'] = '* メールアドレスを入力してください。';
$_LANG['passport_js']['msg_email_registered'] = '* メールアドレスはすでに使われている。その他のメールアドレスに変更してみます。';
$_LANG['passport_js']['msg_email_format'] = '* パソコンのメールアドレスの形式が正しく入力されているか確認してください。';
$_LANG['passport_js']['msg_blank'] = '入力してください。';
$_LANG['passport_js']['no_select_question'] = '- パスワードの提示問題の操作はまだ完成していない。';
$_LANG['passport_js']['passwd_balnk'] = '- パスワードの中で空欄を含むことができない。';


$_LANG['passport_js']['msg_phone_blank'] = '<i></i>携帯番号は空にできません';
$_LANG['passport_js']['msg_phone_registered'] = '<i></i>携帯電話は既に存在しますので、再入力してください';
$_LANG['passport_js']['msg_phone_invalid'] = '<i></i>無効な携帯番号';
$_LANG['passport_js']['msg_phone_not_correct'] = '<i></i>携帯番号が正しくありませんので、再入力してください';
$_LANG['passport_js']['msg_mobile_code_blank'] = '<i></i>携帯電話の認証コードは必ず記入しなければなりません';
$_LANG['passport_js']['msg_mobile_code_not_correct'] = '<i></i>携帯電話の認証コードが正しくありません';

$_LANG['passport_js']['msg_confirm_pwd_blank'] = '<i></i>パスワードの確認は必ず記入してください';

$_LANG['passport_js']['msg_identifying_code'] = '<i></i>認証コードは必ず記入してください';
$_LANG['passport_js']['msg_identifying_not_correct'] = '<i></i>認証コードが正しくありません';



/* user_clips.dwt js 语言文件 */
$_LANG['clips_js']['msg_title_empty'] = '伝言タイトルを入力してください。';
$_LANG['clips_js']['msg_content_empty'] = '伝言内容を入力してください。';
$_LANG['clips_js']['msg_title_limit'] = '伝言タイトルは２００文字以内にしてください。';

/* 合并订单js */
$_LANG['merge_order_js']['from_order_empty'] = '合併したい従注文書を選んでください。';
$_LANG['merge_order_js']['to_order_empty'] = '合併したい主注文書を選んでください。';
$_LANG['merge_order_js']['order_same'] = '主注文書と従注文書は同じです。もう一度選んでください。';
$_LANG['merge_order_js']['confirm_merge'] = 'この2つの注文書を合併することを確定しますか？';

/* 将用户订单中商品加入购物车 */
$_LANG['order_id_empty'] = '注文書番号が未指定';
$_LANG['return_to_cart_success'] = '注文書の中の商品は買い物カゴに入れた。';

/* 保存用户订单收货地址 */
$_LANG['consigness_empty'] = '受取人名を入力してください。';
$_LANG['address_empty'] = '配送先を入力してください。';
$_LANG['require_unconfirmed'] = 'この注文書のステータスの下で住所を改正することができない。';

/* 红包详情 */
$_LANG['bonus_sn'] = '代金券の番号';
$_LANG['bonus_name'] = '代金券の名称';
$_LANG['bonus_amount'] = '代金券の金額';
$_LANG['min_goods_amount'] = '注文書の金額を使います';
$_LANG['bonus_end_date'] = '有効期間';
$_LANG['bonus_status'] = '代金券のステータス';

$_LANG['not_start'] = '未開始';
$_LANG['overdue'] = '已過期';
$_LANG['not_use'] = '使っていません';
$_LANG['had_use'] = 'すでに使いました';

/* 用户推荐 */
$_LANG['affiliate_mode'] = '分成模式';
$_LANG['affiliate_detail'] = '分成明细';
$_LANG['affiliate_member'] = '我推荐的会员';
$_LANG['affiliate_code'] = '推荐代码';
$_LANG['firefox_copy_alert'] = "您的firefox安全限制限制您进行剪贴板操作，请打开’about:config’将signed.applets.codebase_principal_support’设置为true’之后重试";
$_LANG['affiliate_type'][0] = '推荐注册分成';
$_LANG['affiliate_type'][1] = '推荐订单分成';
$_LANG['affiliate_type'][-1] = '推荐注册分成';
$_LANG['affiliate_type'][-2] = '推荐订单分成';

$_LANG['affiliate_codetype'] = '格式';

$_LANG['affiliate_introduction'] = '分成模式介绍';
$_LANG['affiliate_intro'][0] = '　　本网店为鼓励推荐新用户注册，现开展<b>推荐注册分成</b>活动，活动流程如下：

　　１、将本站提供给您的推荐代码，发送到论坛、博客上。
　　２、访问者点击链接，访问网店。
　　３、在访问者点击链接的 <b>%d%s</b> 内，若该访问者在本站注册，即认定该用户是您推荐的，您将获得等级积分 <b>%d</b> 的奖励 (当您的等级积分超过 <b>%d</b> 时，不再获得奖励)。
　　４、该用户今后在本站的一切消费，您均能获得一定比例的提成。目前实行的提成总额为订单金额的 <b>%s</b> 、积分的 <b>%s</b> ，分配给您、推荐您的人等，具体分配规则请参阅 <b><a href="#myrecommend">我推荐的会员</a></b>。
　　５、提成由管理员人工审核发放，请您耐心等待。
　　６、您可以通过分成明细来查看您的介绍、分成情况。';
$_LANG['affiliate_intro'][1] = '　　本网店为鼓励推荐新用户注册，现开展<b>推荐订单分成</b>活动，活动流程如下：

　　１、在浏览商品时，点击推荐此商品，获得推荐代码，将其发送到论坛、博客上。
　　２、访问者点击链接，访问网店。
　　３、在访问者点击链接的 <b>%d%s</b> 内，若该访问者在本站有订单，即认定该订单是您推荐的。
　　４、您将获得该订单金额的 <b>%s</b> 、积分的 <b>%s</b>的奖励。
　　５、提成由管理员人工审核发放，请您耐心等待。
　　６、您可以通过分成明细来查看您的介绍、分成情况。';

$_LANG['level_point_all'] = '积分分成总额百分比';
$_LANG['level_money_all'] = '现金分成总额百分比';
$_LANG['level_register_all'] = '注册积分分成数';
$_LANG['level_register_up'] = '等级积分分成上限';

$_LANG['affiliate_stats'][0] = '等待处理';
$_LANG['affiliate_stats'][1] = '已分成';
$_LANG['affiliate_stats'][2] = '取消分成';
$_LANG['affiliate_stats'][3] = '已撤销';
$_LANG['affiliate_stats'][4] = '等待买家付款';

$_LANG['level_point'] = '积分分成百分比';
$_LANG['level_money'] = '现金分成百分比';

$_LANG['affiliate_status'] = '分成状态';

$_LANG['affiliate_point'] = '积分分成';
$_LANG['affiliate_money'] = '现金分成';

$_LANG['affiliate_expire'] = '有效时间';

$_LANG['affiliate_lever'] = '等级';
$_LANG['affiliate_num'] = '人数';

$_LANG['affiliate_view'] = '效果';
$_LANG['affiliate_code'] = '代码';

$_LANG['register_affiliate'] = '推荐会员ID %s ( %s ) 注册送积分';
$_LANG['register_points'] = '注册送积分';

$_LANG['validate_ok'] = '%s 您好，您email %s 已通过验证';
$_LANG['validate_fail'] = '验证失败，请确认你的验证链接是否正确';
$_LANG['validate_mail_ok'] = '验证邮件发送成功';

$_LANG['not_validated'] = '您还没有通过邮件认证';
$_LANG['resend_hash_mail'] = '点此发送认证邮件';

$_LANG['query_status'] = '查询状态';

$_LANG['change_payment'] = '改用其他在线支付方式';

$_LANG['copy_to_clipboard'] = '已拷贝至剪贴板。';


$_LANG['expire_unit']['hour'] = '小时';
$_LANG['expire_unit']['day'] = '天';
$_LANG['expire_unit']['week'] = '周';

$_LANG['recommend_webcode'] = '网页签名代码';
$_LANG['recommend_bbscode'] = '论坛签名代码';
$_LANG['im_code'] = '聊天分享';
$_LANG['code_copy'] = '复制代码';
$_LANG['show_good_to_you'] = '推荐给你一个好东西';


/* 积分兑换 */
$_LANG['transform_points'] = '积分兑换';
$_LANG['invalid_points'] = '你输入的积分是不一个合法值';
$_LANG['invalid_input'] = '无效';
$_LANG['overflow_points'] = '您输入的兑换积分超过您的实际积分';
$_LANG['to_pay_points'] = '恭喜您， 你%s论坛%s兑换了%s的商城消费积分';
$_LANG['to_rank_points'] = '恭喜您， 你%s论坛%s兑换了%s的商城等级积分';
$_LANG['from_pay_points'] = '恭喜您， 你%s的商城消费积分兑换%s论坛%s';
$_LANG['from_rank_points'] = '恭喜您， 你%s论坛%s兑换了%s的商城消费积分';
$_LANG['cur_points'] = '您的当前积分';
$_LANG['rule_list'] = '兑换规则';
$_LANG['transform'] = '兑换';
$_LANG['rate_is'] = '比例为';
$_LANG['rule'] = '兑换规则';
$_LANG['transform_num'] = '兑换数量';
$_LANG['transform_result'] = '兑换结果';
$_LANG['bbs'] = '论坛';
$_LANG['exchange_amount'] = '支出';
$_LANG['exchange_desamount'] = '收入';
$_LANG['exchange_ratio'] = '兑换比率';
$_LANG['exchange_points'][0] = '商城等级积分';
$_LANG['exchange_points'][1] = '商城消费积分';
$_LANG['exchange_action'] = '换';
$_LANG['exchange_js']['deny'] = '禁止兑换';
$_LANG['exchange_js']['balance'] = '您的{%s}余额不足，请重新输入';
$_LANG['exchange_deny'] = '该积分不允许兑换';
$_LANG['exchange_success'] = '恭喜您， 你用%s个%s兑换了%s个%s';
$_LANG['exchange_error_1'] = 'UCenter提交积分兑换时发生错误';
$_LANG['rank_points'] = '商城等级积分';
$_LANG['pay_points'] = '商城消费积分';

/* 密码强度 */
$_LANG['pwd_lower'] = '低';
$_LANG['pwd_middle'] = '中';
$_LANG['pwd_high'] = '高';
$_LANG['user_reg_info'][0] = 'もし会員ではなかったら、申請してください。';
$_LANG['user_reg_info'][1] = '注意';
$_LANG['user_reg_info'][2] = '非会員でも注文することができる。';
$_LANG['user_reg_info'][8] = '非会員は商品を注文できない。';
$_LANG['user_reg_info'][3] = '申請して会員になった後注文できる。';
$_LANG['user_reg_info'][4] = 'あなた様の個人情報を保存する。';
$_LANG['user_reg_info'][5] = 'ウォッチリストに追加する。';
$_LANG['user_reg_info'][6] = '会員積分制度を享受する。';
$_LANG['user_reg_info'][7] = '当社商品情報を購読する。';
$_LANG['add_bonus'] = '代金券の番号を添加します';

/* 密码找回问题 */
$_LANG['passwd_questions']['friend_birthday'] = '一番いい友達の誕生日は？';
$_LANG['passwd_questions']['old_address']     = '子供のころの居住していた住所は？';
$_LANG['passwd_questions']['motto']           = '座右の銘は？';
$_LANG['passwd_questions']['favorite_movie']  = '一番好きな映画は？';
$_LANG['passwd_questions']['favorite_song']   = '一番好きな歌は？';
$_LANG['passwd_questions']['favorite_food']   = '一番好きな食べ物は？';
$_LANG['passwd_questions']['interest']        = '最大の趣味は？';
$_LANG['passwd_questions']['favorite_novel']  = '一番好きな小説は？';
$_LANG['passwd_questions']['favorite_equipe'] = '一番好きな運動は？';

/* 用户菜单 */
$_LANG['order_list'] = '私の注文書リスト';
$_LANG['address_list'] = '配送住所';
$_LANG['booking_list'] = '欠品登録';
$_LANG['return_list'] = '返品注文';
$_LANG['profile'] = '会員情報';
$_LANG['collection_list'] = '私の収集';
$_LANG['message_list'] = '私の伝言';
$_LANG['affiliate'] = '私の推薦';
$_LANG['comment_list'] = '私の評論';
$_LANG['bonus'] = '私の代金券';
$_LANG['track_packages'] = '荷物追跡';
$_LANG['account_log'] = '資金管理';
$_LANG['baitiao'] = '我的白条';//bylu
$_LANG['repay_bt'] = '白条还款';//bylu
$_LANG['account_safe'] = 'アカウントのセキュリティ';
$_LANG['account_bind'] = 'アカウントバインド';
$_LANG['crowdfunding'] = '我的众筹';
$_LANG['focus_brand'] = 'ブランドに注目';
$_LANG['wholesale_buy'] = '購入命令';
$_LANG['wholesale_purchase'] = '注文書';
$_LANG['invoice'] = '私の請求書';
$_LANG['vat_invoice_info'] = '增值发票信息';
$_LANG['users_log'] = '操作ログ';
$_LANG['order_recycle'] = '受注回収ステーション';

//批发管理
$_LANG['wholesale_centre'] = '批发中心';
$_LANG['my_purchase_order'] = '我的采购单';
$_LANG['want_buy_order'] = '我的求购单';
$_LANG['want_buy_order_desc'] = '求购单详情';
$_LANG['supplier_info'] = '供货商信息';
$_LANG['wholesale_return'] = '我的退货单';


$_LANG['address'] = '收货人地址';
$_LANG['goods_order'] = '退换货订单';
$_LANG['apply_return'] = '申请退换货';
$_LANG['return_detail'] = '退换货详情';
$_LANG['user_picture'] = '编辑头像';
$_LANG['store_list'] = '关注店铺';
$_LANG['account_detail'] = '账户明细';
$_LANG['account_raply'] = '提现';
$_LANG['account_deposit'] = '充值';

//我的发票
$_LANG['my_invoice'] = '我的发票';
$_LANG['order_invoice_state'] = '订单发票状态';
$_LANG['increment_invoice_info'] = '增值发票信息';
$_LANG['invoice_help'] = '发票帮助中心';

//交易纠纷
$_LANG['transaction_disputes'] = '交易纠纷';
$_LANG['may_apply_order'] = '可申请订单';
$_LANG['already_apply_order'] = '已申请订单';
$_LANG['apply_disputes_order'] = '申请纠纷单';
$_LANG['view_disputes_order'] = '查看纠纷单';
$_LANG['complaint_title'] = '纠纷类型';
$_LANG['evidence_upload'] = "证据上传";
$_LANG['complaint_title_null'] = '请选择纠纷类型！';
$_LANG['complaint_content_null'] = '问题描述不能为空！';
$_LANG['complaint_success']  = "投诉成功";
$_LANG['back_complaint_list']  = "返回投诉列表";
$_LANG['complaint_reprat']  = "该订单您已经投诉过了，不能重复提交！";
//违规举报
$_LANG['illegal_report'] = '违规举报';
$_LANG['report_goods'] = '举报商品';

/*入驻申请*/
$_LANG['invalid_img_val']   = '商品相册中第%s个图片格式不正确!';
$_LANG['img_url_too_big']   = '商品相册中第%s个图片文件太大了（最大值：%s），无法上传。';

/*by kong haojlj*/
$_LANG['phone_check_code'] = "手机校验码为空或过期，稍后修改";
$_LANG['single_comment'] = "晒单";
$_LANG['user_keyword'] = "商品名、商品品番、オーダー番号";

$_LANG['greet'][0] = "早上好";
$_LANG['greet'][1] = "中午好";
$_LANG['greet'][2] = "下午好";
$_LANG['greet'][3] = "晚上好";
$_LANG['plugins'] = "服务器尚未注册该插件！";
$_LANG['Access_timeout'] = "非法访问或请求超时！";
$_LANG['Illegal_access'] = "非法访问或访问出错，请联系管理员！";
$_LANG['Mobile_code_error'] = "手机校验码为空或过期，稍后修改";
$_LANG['Mobile_code_null'] = "手机号或手机验证码不为空";
$_LANG['Mobile_code_msg'] = "手机号或手机验证码不正确";
$_LANG['Mobile_username'] = "用户名或手机号错误！";
$_LANG['password_difference'] = "两次密码不一致！";
$_LANG['delete_order'] = "オーダーの削除";
$_LANG['update_address_error'] = '受取人住所情報の更新に失敗しました';
$_LANG['address_perfect_error'] = "收货人信息不完善";
$_LANG['receipt_fail'] = "收货失败-_-，请重新收货";
$_LANG['back_receipt'] = "返回重新收货";
$_LANG['vouchers_all'] = "全场券";
$_LANG['vouchers_user'] = "会员券";
$_LANG['vouchers_shoping'] = "购物券";
$_LANG['vouchers_login'] = "注册券";
$_LANG['vouchers_free'] = "免邮券";
$_LANG['unknown'] = "未知";
$_LANG['user_vouchers'] = "用户中心_优惠券列表";
$_LANG['Repeated_submission'] = "同一订单的同一商品不能重复提交";
$_LANG['Return_abnormal'] = "退换货提交出现异常，请稍后重试";
$_LANG['Apply_refund'] = "申请退款（由用户寄回）";
$_LANG['Apply_Success_Prompt'] = "申请提交成功，工作人员将尽快审核！";
$_LANG['See_Returnlist'] = "查看退换货订单";
$_LANG['Apply_abnormal'] = "申请提交出现了异常，请稍后重试";
$_LANG['payment_coupon'] = "还款提醒";
$_LANG['baitiao_is_pay'] = " 已还款";
$_LANG['balance_insufficient'] = "账户余额不足，请选择其他支付方式";
$_LANG['Ious_Prompt_one'] = "白条分期还款 第%u期 订单号：%s";
$_LANG['Ious_Prompt_two'] = "白条还款 订单号：%s";
$_LANG['Ious_Payment_success'] = "恭喜您,付款成功!";
$_LANG['my_Ious'] = "我的白条";
$_LANG['pay_fail'] = "支付失败";
$_LANG['ious_pay'] = "白条支付";
$_LANG['pay_noline'] = "在线支付";
$_LANG['seller_garde'] = "商家等级入驻";
$_LANG['seller_apply'] = "编号 %s 商家升级申请付款";
$_LANG['apply_success'] = "申请成功";
$_LANG['pay_password_fail'] = "支付密码验证不正确";
$_LANG['back_input'] = "返回重新输入";
$_LANG['back_input_Code'] = "返回重新验证"; 
$_LANG['back_choose'] = "返回重新选择";
$_LANG['back_Fill'] = "返回重新填写";
$_LANG['Mobile_code_null'] = "手机验证码不可为空";
$_LANG['Mobile_code_fail'] = "手机或手机验证码错误";
$_LANG['Real_name_authentication_Mobile_one'] = "手机号和验证手机不符";
$_LANG['Real_name_authentication_Mobile_two'] = "手机号为空，请先认证手机号";
$_LANG['Real_name_authentication_Mobile_three'] = "密码为空或密码不一致";
$_LANG['pay_password_packup_error'] = '您的支付密码有误！'; 
$_LANG['permissions_null'] = "勿闯禁地";
$_LANG['msg_email_format'] = '格式错误，请输入正确的邮箱地址';
$_LANG['msg_email_null'] = '验证邮箱不可为空，请输入正确的邮箱地址';
$_LANG['on_failure'] = "执行失败";
$_LANG['Real_name_password_null'] = "密码不能为空";
$_LANG['Real_name_null'] = "真是姓名不能为空";
$_LANG['self_num_null'] = '身份证号不可为空';
$_LANG['bank_name_null'] = "银行不可为空";
$_LANG['bank_card_null'] = '银行卡号不可为空';
$_LANG['bank_mobile_null'] = '手机号不可为空';
$_LANG['single_comment'] = "評価";
$_LANG['single_comment_on'] = "追加评论";
$_LANG['Risk_rating'][0] = "超级危险";
$_LANG['Risk_rating'][1] = "危险";
$_LANG['Risk_rating'][2] = "低级";
$_LANG['Risk_rating'][3] = "中级";
$_LANG['Risk_rating'][4] = "中高级";
$_LANG['Risk_rating'][5] = "高级";

/*白条*/
$_LANG['operation'] = '操作';
$_LANG['record_id'] = "编号";
$_LANG['qi'] = "期";
$_LANG['dijiqi'] = "第几期";
$_LANG['also_amount'] = "还款金额";
$_LANG['also_state'] = '状态';
$_LANG['also_time'] = '支付时间';
$_LANG['also_pay']['not_pay'] = '未付款';
$_LANG['also_pay']['is_pay'] = '已付款';
$_LANG['bt_Total_amount'] = '白条总额度'; 
$_LANG['element'] = "元";
$_LANG['zhang'] = "张";
$_LANG['Surplus_baitiao'] = "剩余白条额度";
$_LANG['also_day'] = '间隔天数';
$_LANG['also_delay'] = '延期';
$_LANG['amount_paid'] = "待还付款总额";
$_LANG['Pending_payment'] = "待付款白条";
$_LANG['stay_pay'] = "待还款金额";
$_LANG['already_amount'] = "已还款金额";
$_LANG['Transaction_detail'] = "交易明细";
$_LANG['Consumer_account_day'] = "消费记账日";
$_LANG['label_bt_one'] = "到期还款日";
$_LANG['label_bt_two'] = "我的还款日";
$_LANG['order_fee'] = '订单金额';
$_LANG['stage'] = "期";
$_LANG['Has_paid_off'] = "已还清";
$_LANG['repayment'] = "还款";
$_LANG['formated_order_amount'] = "订单总价";
$_LANG['rate'] = "费率";
$_LANG['Number_periods'] = "已还期数";
$_LANG['Repayment_amount_now'] = "当前应还款金额";
$_LANG['Bind_Account'] = "账 号 绑 定";
$_LANG['existing'] = "已有";
$_LANG['No_existing'] = "没有";
$_LANG['Bind_one'] = "账号，请绑定";
$_LANG['user_number_bind'] = "用 户 账 号";
$_LANG['user_password_bind'] = "输 入 密 码";
$_LANG['Code_bind'] = '验　证　码';
$_LANG['captcha_empty'] = '请输入验证码';
$_LANG['forget_password'] = '忘记登录密码';
$_LANG['bind_now'] = "立即绑定";
$_LANG['bind_login_one'] = "您的账户名和登录名";
$_LANG['bind_login_two'] = "建议使用字母、数字和符号两种及以上的组合，6-20个字符";
$_LANG['bind_login_three'] = '建议至少使用两种字符组合';
$_LANG['bind_login_four'] = '支持中文、字母、数字、“-”“_”的组合，3-20个字符';
$_LANG['username_bind'] = "用　户　名";
$_LANG['bind_password'] = "设 置 密 码";
$_LANG['bind_password2'] = "确 认 密 码";
$_LANG['bind_password2_one'] = "请再次输入密码";
$_LANG['bind_phone'] = "手 机 号 码";
$_LANG['bind_phone_one'] = "完成验证后，可以使用该手机登录和找回密码";
$_LANG['bind_phone_two'] = "请正确填写手机号码";
$_LANG['Code_bind_one'] = "看不清？点击图片更换验证码";
$_LANG['bindMobile_code'] = "手机验证码";
$_LANG['bindMobile_code_null'] = "请输入手机验证码";
$_LANG['get_bindMobile_code'] = "获取手机验证码";
$_LANG['comment_captcha_code'] = "邮箱验证码";
$_LANG['agreed_bind'] = "我已阅读并同意";
$_LANG['protocol_bind'] = "用户注册协议";
$_LANG['bind_Mobile'] = "绑定手机";
$_LANG['binding'] = "绑定";
$_LANG['email_user'] = '邮箱';
$_LANG['bonus_user'] = "代金券";
$_LANG['confirmation_not'] = "待确认";
$_LANG['piad_not'] = "支払い待ち";
$_LANG['Receipt_receipt'] = "待确认收货";
$_LANG['receipt_not'] = "受入待ち";
$_LANG['comment_not'] = "待评价";
$_LANG['complete_user'] = "已确认";
$_LANG['see_all_order'] = "すべてのオーダーの表示";
$_LANG['order_total'] = "总金额";
$_LANG['consignee'] = '受取人';
$_LANG['order_time'] = "下单日期";
$_LANG['see_all_Collection'] = 'コレクションの表示';
$_LANG['unit_price_user'] = '販売価格'; 
$_LANG['Collection_time'] = '收藏时间';
$_LANG['Recent_collection'] = "最近のコレクション";
$_LANG['calendar_help'] = '帮助';
$_LANG['help_Prompt_one'] = "售后服务保证";
$_LANG['help_Prompt_two'] = "支付方式说明";
$_LANG['help_Prompt_three'] = "货到付款区域";
$_LANG['help_Prompt_four'] = "如何分辨水货手机";
$_LANG['help_Prompt_five'] = "订购方式";
$_LANG['help_Prompt_six'] = "退换货原则";
$_LANG['help_Prompt_Seven'] = "配送支付智能查询";
$_LANG['help_Prompt_Eight'] = "如何享受全国联保";
$_LANG['help_Prompt_Nine'] = "如何分辨原装电池";
$_LANG['you_have'] = '您有';
$_LANG['Out_stock_goods'] = "件缺货商品";
$_LANG['valid_goods'] = '订购商品';
$_LANG['novalid_goods'] = '您当前没有缺货商品';
$_LANG['Collection_goods'] = "コレクション商品";
$_LANG['message_title'] = '留言主题';
$_LANG['message_content'] = '留言内容';
$_LANG['Select_file'] = '选择文件'; 
$_LANG['message_type_list'] = '仅支持gif、jpg、png、word、excel、txt、zip、ppt、pdf ';
$_LANG['Split_rule'] = "分成规则";
$_LANG['Web_signature'] = "网页签名";
$_LANG['stay_evaluate_goods'] = "待商品评价";
$_LANG['stay_add_file'] = "待追加图片";
$_LANG['Already_evaluated'] = "已评价";
$_LANG['goods_info'] = "商品情報";
$_LANG['message_state'] = "评价状态";
$_LANG['Click_review'] = "点击评论";
$_LANG['order_Prompt'] = "まだ完了していない注文-_-";
$_LANG['Continue_bask_single'] = "继续晒单";
$_LANG['comment_see'] = "查看评论";
$_LANG['comment_again'] = "继续评论";
$_LANG['comment_add'] = "評価の追加";
$_LANG['Satisfaction_evaluation'] = "满意度评价";
$_LANG['No_comment'] = "暂无";
$_LANG['product_desc'] = '商品描述相符';
$_LANG['Like_ata'] = "赞一个";
$_LANG['Please_rate'] = '请打分';
$_LANG['seller_fwtd'] = '卖家服务态度';
$_LANG['logistics_speed'] = '物流发货速度';
$_LANG['logistics_senders'] = '配送人员态度';
$_LANG['comments_think'] = "感谢您的评价";
$_LANG['take_list'] = "提货列表";
$_LANG['complaint_list'] = "交易纠纷";
$_LANG['gift_gard_number'] = "礼品卡卡号";
$_LANG['gift_goods_name'] = '提货商品';
$_LANG['tpnd_time'] = '提货时间';
$_LANG['gift_address'] = "提货地址";
$_LANG['gift_status'] = '提货状态';
$_LANG['gift_Prompt'] = '提货成功，等待发货';
$_LANG['null_gift_Prompt'] = '您暂无提货信息';
$_LANG['null_handle'] = '暂无';
$_LANG['is_complaint'] = '已申诉';
$_LANG['complaint'] = '我要申诉';
$_LANG['complaint_success'] = '申诉成功，已提交系统审核！';
$_LANG['Transaction_record'] = "交易记录";
$_LANG['all_status'] = '全部状态';
$_LANG['Complaint_goods'] = "投诉商品";
$_LANG['Complaint_store'] = "被投诉店铺";
$_LANG['Complaint_title'] = "投诉主题";
$_LANG['Treatment_status'] = "处理状态";
$_LANG['Label_number_null'] = "至少选择一个标签";
$_LANG['Verify_email'] = "メールボックスの検証";
$_LANG['Login_name'] = "ログイン名";
$_LANG['Post'] = "メール";
$_LANG['box'] = "ボックス";
$_LANG['verification_code'] = "認証コードを無料で入手";
$_LANG['code_number'] = "4桁の数字";
$_LANG['Free_registration'] = "新規取得(無料)";
$_LANG['Welcome_login'] = "ようこそ";
$_LANG['passport_one'] = "ユーザー名とパスワードが一致しません。再入力してください。";
$_LANG['passportforgot_password'] = 'パスワードを忘れましたか?';
$_LANG['signin_now'] = '登&nbsp;&nbsp;録';
$_LANG['Third_party_Lgion'] = "サードパーティアカウントで直接ログイン";
$_LANG['jingdong'] = "アプリで";
$_LANG['code_lgion'] = "スイープコード安全登録";
$_LANG['lgion_fail'] = "ログイン失敗";
$_LANG['code_lgion_again'] = "QRコードを再スキャンしてください";
$_LANG['Refresh_two_code'] = "QRコードの更新";
$_LANG['Use_help'] = "ヘルプの使用";
$_LANG['code_problem'] = "スキャンできない、バージョンが低すぎる";
$_LANG['code_lgion_now'] = 'スキャン登録'; 
$_LANG['Have_account'] = "IDあり";
$_LANG['login_here'] = 'ここにログイン';
$_LANG['or_login'] = 'または';
$_LANG['email_yanzheng'] = "メールボックスの検証";
$_LANG['email_label'] = "メールボックスの検証";
$_LANG['phone_yanzheng'] = "携帯認証";
$_LANG['Prompt_problem'] = "ヒント";
$_LANG['passwd_answer_useer'] = '質問の答え';
$_LANG['getMobile_code'] = "認証コードの取得";
$_LANG['service_agreement'] = "サービス契約";
$_LANG['Agreement_register'] = "契約に同意して登録する";
$_LANG['register_now'] = "登録";
$_LANG['reset_email_password'] = "メールボックスの検証";
$_LANG['reset_phone_password'] = '携帯認証';
$_LANG['Regist_problem'] = "登録の問題";
$_LANG['email_reset'] = 'メールボックス';
$_LANG['reset_password'] = 'パスワードのリセット';
$_LANG['bind_mobile_regist'] = '携帯番号のバインド';
$_LANG['msg_mobile_code'] = '携帯電話の動的コード';
$_LANG['get_verification_code'] = "認証コードの取得";
$_LANG['Order_recycling_station'] = "注文書回収所";
$_LANG['all_time'] = 'すべての時間';
$_LANG['Today'] = "今日";
$_LANG['three_today'] = "3日以内";
$_LANG['aweek'] = "1週間以内";
$_LANG['thismonth'] = "1月以内";
$_LANG['search_oreder_user'] = "商品名または注文番号を入力して検索";
$_LANG['query'] = '検索';
$_LANG['Ious_staging'] = "白条分期";
$_LANG['baitiao_order'] = "白条订单";
$_LANG['Waybill_number'] = '配送番号';
$_LANG['pick_code'] = "提货码";
$_LANG['amount_each'] = "每期金额";
$_LANG['yuan_stage'] ='元/期';
$_LANG['bt_go_refund'] = "去还款";
$_LANG['logistics_tracking'] ='宅配追跡';
$_LANG['info'] = "信息";
$_LANG['zc_scheme_info'] = "众筹方案信息";
$_LANG['zc_project_name'] ='众筹项目名称';
$_LANG['zc_project_raise_money'] = '众筹金额';
$_LANG['zc_goods_price'] = '方案价格';
$_LANG['freight'] = "运费";
$_LANG['user_goods_sn'] = "商品品番";
$_LANG['Discount_user'] = "优惠";
$_LANG['check_all'] = '全选';
$_LANG['put_in_cat'] = '放入购物车';
$_LANG['Other'] = '其他';
$_LANG['Deposit_user'] = "应付款(定金)";
$_LANG['Deposit_user_one'] = "支払合計";
$_LANG['end_pay_time'] = "非常抱歉，已超出最后支付尾款日期";
$_LANG['pay_end_one'] = "请留意支付尾款时间为";
$_LANG['zhi'] = "至";
$_LANG['pay_end_two'] = "止， 订金支付后无法退还！";
$_LANG['Fixed_telephone'] = "電話番号";
$_LANG['user_address'] = "地址";
$_LANG['email_address'] = "电子邮件";
$_LANG['offline_store_information'] = '门店信息';
$_LANG['stores_name']                 = '门店名称';
$_LANG['stores_opening_hours']        = '营业时间';
$_LANG['stores_traffic_line']         = '交通线路';
$_LANG['stores_img']                  = '实景图片';
$_LANG['since_some_info'] = '自提点信息';
$_LANG['Invoice_information'] = '发票信息';
$_LANG['Order_note_user'] = "订单备注";
$_LANG['store_grade_list'] = "商家等级入驻列表";
$_LANG['grade_name'] = "等级名称";
$_LANG['good_number'] = '商品数量';
$_LANG['temp_number'] = '模板数量';
$_LANG['grade_introduce']   = '等级介绍';
$_LANG['entry_criteria']    = '加入标准';
$_LANG['grade_img']         =  '等级标志';
$_LANG['Has_succeeded'] = "已成功";
$_LANG['once'] = '立即申请';
$_LANG['grade_info']        = '当前等级信息';
$_LANG['now_grade']         = '当前等级';
$_LANG['examine_info']         = '审核信息';
$_LANG['in_time']           = '入驻时间';
$_LANG['end_time']          = '到期时间';
$_LANG['refund_grade']      = '剩余金额';
$_LANG['year'] = "年";
$_LANG['information_count'] = '综合信息';
$_LANG['settled_down'] = "入驻年限";
$_LANG['label_total_user'] = '合计';
$_LANG['Settlement'] = "结算";
$_LANG['Select_payment'] = '您选定的支付方式为';
$_LANG['Fee_for_user'] = "手续费为";
$_LANG['payment_amount_user'] = "您的应付款金额为";
$_LANG['remark_package'] = '（礼包）';
$_LANG['nothing'] = "无";
$_LANG['Have_applied'] = "[已申请]";
$_LANG['close_applied'] = "[已关闭]";
$_LANG['applied'] = "申请";
$_LANG['batch_applied'] = "批量申请";
$_LANG['Return_repair'] = "返修退换货";
$_LANG['Return_type'] = "退换类别";
$_LANG['Return_reason'] = "退换原因";
$_LANG['Return_one'] = "7天内退换货";
$_LANG['Return_two'] = "8-15天换货";
$_LANG['Return_three'] = "15天以上在质保期内";
$_LANG['Performance_fault'] = "性能故障";
$_LANG['Performance_fault_one'] = "商品使用过程中，无法满足售前介绍的使用基本需求";
$_LANG['Missing_parts'] = "缺少配件";
$_LANG['Missing_parts_one'] = "实际收到商品附件与网页介绍包装清单中的内容不符";
$_LANG['Logistics_loss'] = "物流损";
$_LANG['Logistics_loss_one'] = "因物流运输导致商品损坏、残缺，无法正常使用";
$_LANG['Inconsistent_goods'] = "商品实物与网站不符";
$_LANG['Inconsistent_goods_one'] = "实际收到 商品实物与网页介绍规格参数中的内容不符";
$_LANG['Buy_wrong'] = "错买、多买";
$_LANG['Buy_wrong_one'] = "在商品（包装及附件）完好的前提下";
$_LANG['Buy_wrong_two'] = "可退";
$_LANG['Return_Explain'] = "<h3>服务说明</h3>
                <p><i>1、</i><span>附件赠品，退换货时请一并退回。</span></p>
                <p><i>2、</i><span>关于物流损：请您在收货时务必仔细验货，如发现商品外包装或商品本身外观存在异常，需当场向配送人员指出，并拒收整个包裹；如您在收货后发现外观异常，请在收货24小时内提交退换货申请。如超时未申请，将无法受理。</span></p>
                <p><i>3、</i><span>关于商品实物与网站描述不符：保证所出售的商品均为正品行货，并与时下市场上同样主流新品一致。但因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，所以我们无法确保您收到的货物与商城图片、产地、附件说明完全一致。</span></p>
                <p><i>4、</i><span>如果您在使用时对商品质量表示置疑，您可出具相关书面鉴定，我们会按照国家法律规定予以处理。</span></p>";
$_LANG['Service_Mingxi'] = "服务单明细";
$_LANG['reminder'] = '温馨提示';
$_LANG['reminder_one'] = '本次售后服务将由卖家';
$_LANG['reminder_two'] = '为您提供';
$_LANG['Service_type'] = "服务类型";
$_LANG['order_return_type'][0] = "维修";
$_LANG['order_return_type'][1] = "退货";
$_LANG['order_return_type'][2] = "换货";
$_LANG['order_return_type'][3] = "仅退款";
$_LANG['Repair_number'] = "维修数量";
$_LANG['Repair_one'] = "可供维修";
$_LANG['Repair_two'] = "件，已维修";
$_LANG['jian'] = "件";
$_LANG['return_number'] = "退货数量";
$_LANG['return_one'] = "可供退换";
$_LANG['return_two'] = "件，已退";
$_LANG['return_one'] = "可供退换";
$_LANG['return_two'] = "件，已退";
$_LANG['change_two'] = "件，已换";
$_LANG['Application_credentials'] = "申请凭据";
$_LANG['has_Test_Report'] = "有检测报告";
$_LANG['return_reason']='退换货原因';
$_LANG['problem_desc'] = '问题描述';
$_LANG['pic_info'] = '图片信息';
$_LANG['pic_info_one'] = '<p>为了帮助我们更好的解决问题，请您上传图片</p>
                                    <p>按住Ctrl可以多个图片上传</p>
									<p>最多可上传10张图片，每张图片大小不超过5M，支持bmp,gif,jpg,png,jpeg格式文件</p>
									';
$_LANG['Empty_picture'] = '清空图片';
$_LANG['Contact_name'] = "联系人姓名";
$_LANG['label_mobile'] = '携帯番号';
$_LANG['detailed_info'] = "详细信息";
$_LANG['return_sn'] = "退货编码";
$_LANG['apply_time'] = "申请时间";
$_LANG['return_type_user'] = "退款类型";
$_LANG['back_cause'] = '退货原因';
$_LANG['amount_return'] = '商品退款';
$_LANG['return_shipping'] = '运费退款';
$_LANG['return_total'] = '合计已退款';
$_LANG['Contact_address'] = "联系地址";
$_LANG['progress_return'] = "换货发货进度";
$_LANG['Waybill'] = "运货单";
$_LANG['Logistics_company'] = "物流公司";
$_LANG['Express_info'] = "快递信息";
$_LANG['Express_company'] = "快递公司";
$_LANG['select_Express_company'] = "请选择快递公司";
$_LANG['User_sent'] = "用户寄出";
$_LANG['courier_sz'] ='快递单号';
$_LANG['Express_info_two'] = "请填写您寄回商品的快递信息";
$_LANG['seller_shipping'] ='商家发货';
$_LANG['consignee_new'] = '受取人住所の追加';
$_LANG['add_consignee_one'] = '作成済み';
$_LANG['add_consignee_two'] = '個の宛先、 作成することもできます';
$_LANG['default_consigneeing'] = "デフォルトアドレスに設定されています";
$_LANG['default_consignee_to'] = "デフォルト設定";
$_LANG['modify'] = "変更";
$_LANG['Newly'] = "新規作成";
$_LANG['consignee_empty'] = "受取人情報は空ではありません";
$_LANG['Local_area'] = '所在地';
$_LANG['select_Local_area'] = '地域を選択してください';
$_LANG['detailed_address_null'] = '詳しい住所をご記入ください';
$_LANG['label_tel'] = '電話番号';
$_LANG['label_tel_empty'] = "連絡先をご記入ください";
$_LANG['default_consigneed'] = "デフォルトの受信アドレスに設定";
$_LANG['submit_address'] = '受取人住所の保存';
$_LANG['youhave'] = 'あります';
$_LANG['return_goods_user'] = '返品交換品';
$_LANG['return_sn_user'] = '退换货流水号';
$_LANG['y_amount'] = '应退金额';
$_LANG['return_order_user'] = '您当前没有退换货订单';
$_LANG['return_order_user_desc'] = '<h3>提示</h3>
                    <p>1、请您尽快寄出退换货商品</p>
                    <p>2、请您寄出商品后填写快递信息，填写快递信息后，您的退换货业务将在我们收到退换货商品后第一时间为您受理</p>';

$_LANG['Modify_Avatar'] = 'アイコンの変更';
$_LANG['nick_name'] = 'ニックネーム';
$_LANG['Birthday_user'] = "誕生日";
$_LANG['sex_user'] = "性別";
$_LANG['Immediately_verify'] = "即時検証";
$_LANG['Security_Center'] = "あんぜんセンタ";
$_LANG['Security_level'] = "セキュリティ・レベル";
$_LANG['Security_level_desc'] = "アカウントと資金の安全を保障するために、すべての安全設定を開始することをお勧めします。";
$_LANG['password_user'] = 'ログインパスワード';
$_LANG['password_user_desc'] = 'インターネットアカウントが盗まれるリスクがあるので、定期的にパスワードを変更してアカウントの安全を守ることをお勧めします。';
$_LANG['Email_authent'] = "メール認証";
$_LANG['email_yanzheng_you'] = "認証済みメールボックス";
$_LANG['Email_authent_desc'] = "検証後、ログインパスワードをすばやく取り戻したり、口座残高の変動通知を受信したりすることができます。";
$_LANG['is_validated'] = '検証';
$_LANG['phone_authent'] = "携帯認証";
$_LANG['phone_authent_desc'] = "您的手机已验证，若已丢失或停用，请立即更换，避免账户被盗";
$_LANG['phone_authent_desc_one'] = "验证后，可用于快速找回登录密码及支付密码，接收账户余额变动提醒。";
$_LANG['pay_password'] = '支付密码';
$_LANG['confirm_pay_password'] = '确认支付密码';
$_LANG['Safety_certification'] = "安全验证";
$_LANG['Degree_of_safety'] = "安全程度";
$_LANG['Degree_of_safety_desc'] = "已启用支付密码，建议您定期更换更高强度的密码。";
$_LANG['pay_password_manage'] = '支付密码';
$_LANG['Safety_renzheng'] = "安全认证";
$_LANG['Safety_renzheng_desc'] = "安全认证";
$_LANG['Enable_now'] = "立即启用";
$_LANG['16_users_real'] = '实名认证';
$_LANG['16_users_real_info'] = '您认证的实名信息';
$_LANG['16_users_real_desc'] = '您还未实名认证该账户，立即实名认证可加快提现速度。';
$_LANG['Safety_now'] = "立即认证";
$_LANG['edit_password_login'] = "修改登录密码";
$_LANG['Verify_identity'] = "验证身份";
$_LANG['Verify_phone_in'] = "已验证手机";
$_LANG['adopt_phone'] = "通过手机验证";
$_LANG['Verify_email_in'] = "通过已验证邮箱验证";
$_LANG['Verify_password_in'] = "通过支付密码验证";
$_LANG['Verify_phone_user'] = "通过已验证手机验证";
$_LANG['Verify_password_user'] = "通过支付密码验证";
$_LANG['Verify_phone_codeempty'] = "请填写手机校验码";
$_LANG['get_verification_code_user'] = "获取短信校验码";
$_LANG['Verified_mailbox'] = "已验证邮箱";
$_LANG['send_verify_email'] = '发送验证邮件';
$_LANG['input_pay_password'] = '请输入支付密码';
$_LANG['send_email_in'] = '已发送验证邮件至';
$_LANG['send_email_desc_one'] = '请尽快登录您的邮箱在有效期内点击验证链接完成验证。';
$_LANG['send_email_desc_two'] = '未收到邮件返回验证';
$_LANG['send_email_desc_three'] = '（请立即完成验证，邮箱验证不通过则修改邮箱失败）';
$_LANG['new_login_password'] = "新的登录密码";
$_LANG['password_Prompt'] = "由字母加数字或符号至少两种以上字符组成的6-20位半角字符，区分大小写";
$_LANG['input_password_again'] = "请再输入一次密码";
$_LANG['security_rating'] = "恭喜您，修改密码成功！";
$_LANG['security_rating_one'] = "最新安全评级";
$_LANG['security_rating_two'] = "您的账户安全级还能提升哦，快去";
$_LANG['security_rating_three'] = "完善其它安全设置提高评级吧！";
$_LANG['Mailbox_Management'] = "管理邮箱";
$_LANG['edit_email'] = "修改邮箱";
$_LANG['Verify_mailbox'] = "验证邮箱";
$_LANG['website_email'] = '邮箱地址';
$_LANG['edit_email_desc_one'] = "恭喜您，邮箱修改验证成功！";
$_LANG['edit_email_desc_two'] = "恭喜您，邮箱验证成功！";
$_LANG['edit_email_desc_three'] = "恭喜您，邮箱修改验证成功！";
$_LANG['edit_email_desc_four'] = "恭喜您，邮箱修改验证成功！";
$_LANG['phone_Management'] = "手机管理";
$_LANG['phone_edit'] = "修改手机";
$_LANG['Verify_phone'] = "验证手机";
$_LANG['bind_phone_user'] = "恭喜您，手机绑定成功！";
$_LANG['pay_password_Management'] = "支付密码管理";
$_LANG['edit_pay_password'] = "修改支付密码";
$_LANG['Enable_pay_password'] = "启用支付密码";
$_LANG['Enable_pay_password_desc'] = "启用支付密码后，将在如下环节通过支付密码对您进行身份认证，确保您的资金安全，请您确认！";
$_LANG['pay_password_Prompt'] = "您的支付密码已开启！";
$_LANG['forgot_paypassword'] = '忘记支付密码？';
$_LANG['pay_online'] = '线上支付';
$_LANG['balance_pay'] = "余额支付";
$_LANG['Enable_pay_password_notice'] = "恭喜您，启用支付密码成功！";
$_LANG['Real_name'] = "真实姓名";
$_LANG['Real_name_notice'] = "为确保您的账户安全，请填写您本人的实名认证信息";
$_LANG['Real_name_input'] = "请输入姓名";
$_LANG['number_ID'] = "身份证号";
$_LANG['bank'] = '银行名称';
$_LANG['bank_card'] = '银行卡号';
$_LANG['Support_bank'] = '支持银行';
$_LANG['Savings_deposit_card'] = "储蓄卡";
$_LANG['Credit'] = "信用卡";
$_LANG['bank_name']['ICBC'] = '工商银行';
$_LANG['bank_name']['CCB'] = '建设银行';
$_LANG['bank_name']['CMB'] = '招商银行';
$_LANG['bank_name']['ABC'] = '农业银行';
$_LANG['bank_name']['BCOM'] = '中国交通银行';
$_LANG['bank_name']['GDB'] = '广发银行';
$_LANG['bank_name']['BOC'] = '中国银行';
$_LANG['bank_name']['CMBC'] = '中国民生银行';
$_LANG['label_mobile_notice'] = '请填写该卡在银行预留的手机号码，验证该银行卡是否真实属于您本人';
$_LANG['label_mobile_input'] = '请输入手机号';
$_LANG['label_mobile_code'] = '短信验证码';
$_LANG['Short_message_null'] = '没有收到短信？';
$_LANG['label_mobile_error'] = '手机号码有误？';
$_LANG['mobile_step_notice'] = "可按以下步骤依次确认解决问题：";
$_LANG['mobile_step_notice_one'] = "1. 请确认该预留手机号是当前使用手机号<br>
                                2. 若银行预留手机号已停用，请联系银行修改<br>
                                3. 银行预留手机号码修改完毕后请重新绑定<br>
                                4. 获取更多帮助，可以联系";
$_LANG['mobile_Agree'] = "同意协议并确定";
$_LANG['edit_info'] = "修改信息";
$_LANG['Verify_time'] = "认证时间";
$_LANG['adopt_status'] = '审核状态';
$_LANG['is_confirm'][0]   = '未审核';
$_LANG['is_confirm'][1]   = '审核通过';
$_LANG['is_confirm'][2]   = '审核未通过';
$_LANG['Authentication_channel'] = "认证渠道：实名认证";
$_LANG['bind_qq'] = "绑定QQ账号";
$_LANG['Bound'] = "已绑定";
$_LANG['not_Bound'] = "未绑定";
$_LANG['Unbundling'] = "解绑";
$_LANG['Un_bind'] = "解除绑定";
$_LANG['Shopping_user'] = "购物";
$_LANG['account_bind_one'] = "您正在使用的";
$_LANG['account_bind_two'] = "账号关联1个QQ账号";
$_LANG['account_bind_three'] = "请您牢记该";
$_LANG['account_bind_fuor'] = "账号";
$_LANG['account_bind_five'] = "<li>1、解绑后需要使用此账号进行登录，解绑后的账号仍可正常使用，订单等信息不会丢失，忘记密码请在登录页找回密码；</li>
                                <li>2、该账号下关联QQ账号将全部解绑；</li>";
$_LANG['account_bind_six'] = "绑定后，可以使用QQ帐号登录";
$_LANG['weibo_one'] = "绑定微博账号";
$_LANG['weibo_two'] = "账号关联1个微博账号";
$_LANG['weibo_three'] = "<li>1、解绑后需要使用此账号进行登录，解绑后的账号仍可正常使用，订单等信息不会丢失，忘记密码请在登录页找回密码；</li>
                                <li>2、该账号下关联微博账号将全部解绑；</li>";
$_LANG['weibo_four'] = "绑定后，可以使用微博帐号登录";
$_LANG['weixin_one'] = "绑定微信账号";
$_LANG['weixin_two'] = "账号关联1个微信账号";
$_LANG['weixin_three'] = "<li>1、解绑后需要使用此账号进行登录，解绑后的账号仍可正常使用，订单等信息不会丢失，忘记密码请在登录页找回密码；</li>
                                <li>2、该账号下关联微信账号将全部解绑；</li>";
$_LANG['weixin_four'] = "绑定后，可以使用微信帐号登录";
$_LANG['bonus_balance'] = "利用可能な金券残高";
$_LANG['available_bonus'] = '金券が使える';
$_LANG['About_expire'] = '有効期限が近づく';
$_LANG['bonus_info'] = '<h3>代金券バインドと説明</h3>
                <p>1、左側に代金券カード番号のパスワードを入力してバインドまたはクエリーを行います。</p>
                <p>2、旧版代金券(カード番号19ビット)をお持ちの場合は、アクティブになったら"<span class="ftx-05"> 私の代金券 </span>"のクエリで使用可能な代金券残高。</p>
                ';
$_LANG['card_number'] = 'カード番号';
$_LANG['card_password'] = 'カードパスワード';
$_LANG['Bind_current_account'] = "アカウントへのバインドの決定";
$_LANG['Bound_bonus'] = "バインドされた代金券";
$_LANG['keyong'] = "使用可能";
$_LANG['have_been_exhausted'] = "使用済み";
$_LANG['card_number_label'] = "カード番号";
$_LANG['face_value_label'] = "額面";
$_LANG['Min_order_amount'] = "最小受注金額";
$_LANG['bind_time'] = "バインド時間";
$_LANG['general_audience'] = '満場共通';
$_LANG['bonus_help_one'] = "代金券使用ヘルプ ";
$_LANG['bonus_help_two'] = "<p>1.代金券アカウントをバインドした後、現在のバインドアカウントでのみ使用できます；</p>
                                <p>3.代金券の有効期限に注目してください；</p>";
$_LANG['bonus_help_three'] = " <p>5.他に質問があれば、以下のヘルプページをクリックして検索してください。。</p>";
$_LANG['Use_rule'] = "ルールの使用";
$_LANG['Invoice_distribution'] = "配送";
$_LANG['Red_envelope'] = "代金券規約";
$_LANG['Coupon_list'] = "クーポンリスト";
$_LANG['Consumption_full'] = "購入金額";
$_LANG['no_use_sn'] = "券&nbsp;&nbsp;番&nbsp;&nbsp;号";
$_LANG['Category_restrictions'] = "品目制限";
$_LANG['Platform_limit'] = "プラットフォームの制限";
$_LANG['xian'] = "限";
$_LANG['employ'] = "使用";
$_LANG['whole_platform'] = "自营";
$_LANG['Immediate_use'] = "今すぐ使用";
$_lang['data_empty'] = "暫定データなし";
$_LANG['Expiration_time'] = "有効期限";
$_LANG['latest_state'] ="最新のステータス";
$_LANG['null_invoice'] = "小包がない";
$_LANG['label_user_balance'] = '会员余额';
$_LANG['05_seller_account_log'] = '申请记录';
$_LANG['account_log_empty'] = "您当前没有申请记录";
$_LANG['current_funding'] = "您当前的资金为";
$_LANG['operation_log_null'] = "您当前没有操作记录";
$_LANG['Current_balance'] = "当前可提现余额";
$_LANG['Current_balance'] = "当前可提现余额";
$_LANG['Current_balance_label'] = "可提现金额";
$_LANG['renmingni'] = "（人民币）";
$_LANG['Application_withdrawal'] = "申请提现";
$_LANG['Reset_Form'] = "重置表单";
$_LANG['yueangqian'] = "您当前账户余额为";
$_LANG['Determine_Recharge'] = "确定充值";
$_LANG['Recharge_info'] = "充值信息";
$_LANG['I_support'] = "我支持的";
$_LANG['I_concerned'] = "我关注的";
$_LANG['Already_paid'] = "已支付";
$_LANG['not_paid'] = "未支付";
$_LANG['Project_info'] = "项目信息";
$_LANG['zc_number'] = "支持人数(人)";
$_LANG['gz_number'] = "关注人数(人)";
$_LANG['zc_in'] = "众筹中";
$_LANG['zc_raise'] = "已筹集";
$_LANG['go_pay'] = "去付款";
$_LANG['zc_ss'] = '发货中';
$_LANG['Received_goods'] = "已收货";
$_LANG['Received_notice_one'] = "很抱歉，这儿是个荒地。<br/>您还没有支持任何项目，去";
$_LANG['Received_notice_two'] = "看看有什么感兴趣的吧！";
$_LANG['zc_home'] = "众筹首页";
$_LANG['To_support'] = "去支持";
$_LANG['report_img_number'] = "最多只能上传5张图片！";
$_LANG['inform_content_null']           = '举报内容不能为空！';
$_LANG['type_null']        = '请选择举报类型！';
$_LANG['title_null']        = '请选择举报主题！';
$_LANG['report_success']  = "举报成功";
$_LANG['back_report_list']  = "返回举报列表";
$_LANG['repeat_report']  = "该商品你已经举报，请等待处理结果！";
$_LANG['offgoods_report']  = "该商品下架整顿中，暂时不能举报！";


$_LANG['js_languages']['user_name_bind'] = "口座名とパスワードを入力してください";
$_LANG['js_languages']['user_namepassword_bind'] = "正しい口座名とパスワードを入力してください";
$_LANG['js_languages']['is_user_follow'] = "選択した商品に注目しますか?";
$_LANG['js_languages']['cancel_user_follow'] = "選択した商品に注目するのをキャンセルしますか?";
$_LANG['js_languages']['delete_user_follow'] = "注目商品を削除しますか？";
$_LANG['js_languages']['delete_brand_follow'] = "注目ブランドを削除しますか?";
$_LANG['js_languages']['select_follow_goods'] = "注目商品をお選びください";
$_LANG['js_languages']['select_follow_brand'] = "注目ブランドをお選びください";
$_LANG['js_languages']['follow_Prompt'] = "ヒント";
$_LANG['js_languages']['comments_think'] = "ご評価ありがとうございます";
$_LANG['js_languages']['comment_img_number'] = "最大10枚の画像しかアップロードできません！";
$_LANG['js_languages']['content_not'] = '内容は必ず記入しなければなりません';
$_LANG['js_languages']['word_number'] = '0～500文字を記入してくださいね';
$_LANG['js_languages']['button_unremove'] = '確認';
$_LANG['js_languages']['comments_Other'] = '他の注文商品についてコメントを続けることができます。';
$_LANG['js_languages']['parameter_error'] = "コミットパラメータに誤りがある！";
$_LANG['js_languages']['fuzhizgantie'] = "アドレスがコピーされているので、Ctrl+Vで貼り付けることができます。";
$_LANG['js_languages']['verify_email_null'] = "メールアドレスを空白にすることはできません";
$_LANG['js_languages']['verify_email_Wrongful'] = "メールアドレスが不正です";
$_LANG['js_languages']['verify_email_code_number'] = "4桁の認証コードをご記入ください";
$_LANG['js_languages']['Mailbox_sent'] = "メールボックスが送信されました";
$_LANG['js_languages']['operation_order_one'] = "注文を削除しますか?";
$_LANG['js_languages']['operation_order_two'] = "この注文を復元しますか?";
$_LANG['js_languages']['operation_order_three'] = "この注文を永続的に削除しますか?";
$_LANG['js_languages']['logistics_tracking_in'] ='物流情報を調べています。お待ちください...';
$_LANG['js_languages']['surplus_null'] ='使用残高は空白にできません';
$_LANG['js_languages']['surplus_isnumber'] ='使用残高は数値でなければなりません';
$_LANG['js_languages']['cannot_null'] = '空白にできない';
$_LANG['js_languages']['select_payment_pls'] = 'お支払い方法をお選びください';
$_LANG['js_languages']['settled_down_lt1'] = "缴纳年限不能小于1";
$_LANG['js_languages']['Wrongful_input'] = "输入内容不合法";
$_LANG['js_languages']['return_one'] = "请选择退换货原因！";
$_LANG['js_languages']['return_two'] = "请选择退换货原因！";
$_LANG['js_languages']['return_three'] = "问题描述不能为空！";
$_LANG['js_languages']['return_four'] = "请选择国家";
$_LANG['js_languages']['address_empty'] = '受取人の住所を空白にすることはできません';
$_LANG['js_languages']['Contact_name_empty'] = '联系人姓名不能为空';
$_LANG['js_languages']['phone_format_error'] = '手机号码格式不对。';
$_LANG['js_languages']['msg_phone_blank'] = '手机号码不能为空';
$_LANG['js_languages']['change_two'] = "最多可换数量：";
$_LANG['js_languages']['jian'] = "件";
$_LANG['js_languages']['select_Express_company'] = "请选择快递公司";
$_LANG['js_languages']['Express_companyname_null'] = "请填写快递公司名称";
$_LANG['js_languages']['courier_sz_nul'] ='请填写快递单号';
$_LANG['js_languages']['delete_consignee'] = '受取人の住所を削除しますか?';
$_LANG['js_languages']['default_consignee'] = 'デフォルトの受取人住所に設定しますか?';
$_LANG['js_languages']['sign_building_desc'] = "设置一个易记的名称，如：'送到家里'、'送到公司'";
$_LANG['js_languages']['Immediately_verify'] = "立即验证";
$_LANG['js_languages']['null_email_user'] = '邮箱不能为空'; 
$_LANG['js_languages']['SMS_code_empty'] = '短信验证码不能为空'; 
$_LANG['js_languages']['Real_name_password_null'] = "密码不能为空";
$_LANG['js_languages']['Verify_password_deff'] = "密码不一样";
$_LANG['js_languages']['Real_name_null'] = "真实姓名不能为空";
$_LANG['js_languages']['number_ID_null'] = "身份证号不能为空";
$_LANG['js_languages']['bank_name_null'] = "银行不能为空";
$_LANG['js_languages']['bank_number_null'] = "银行卡号不能为空";
$_LANG['js_languages']['Un_bind'] = "解除绑定";
$_LANG['js_languages']['bind_user_one'] = "您确定要";
$_LANG['js_languages']['account_bind_fuor'] = "账号";
$_LANG['js_languages']['account_bind_five'] = "解绑后请用";
$_LANG['js_languages']['registered'] = "登录";
$_LANG['js_languages']['card_number_null'] = "卡号不能为空";
$_LANG['js_languages']['go_login'] = "去登录";
$_LANG['js_languages']['cancel_zc'] = "是否确定取消关注该众筹项目";
$_LANG['js_languages']['no_attention'] = '取消关注';
$_LANG['js_languages']['Unbundling'] = "解绑";
$_LANG['js_languages']['binding'] = "绑定";
$_LANG['js_languages']['stop'] = "收起";
$_LANG['js_languages']['number_ID_error'] = "身份证号格式错误，请输入正确的身份证号";
$_LANG['js_languages']['bank_number_error'] = "银行卡号格式不正确";

//20161214 start
$_LANG['follow_batch'] = '一括注目';
$_LANG['drop_batch'] = '一括削除';
$_LANG['Collection_goods_null'] = "申し訳ございませんが、商品はまだコレクションされていません！";
$_LANG['Popularity_follow'] = "人気に注目";
$_LANG['Service_evaluation'] = "サービス評価";
$_LANG['follow_time'] = "注目時間";
$_LANG['shop_sells'] = "当店は大人気";
$_LANG['shop_new'] = "当店新品";
$_LANG['Collection_store_null'] = "申し訳ございませんが、まだお店を所蔵しておりません！";
$_LANG['score'] = "採点";
$_LANG['Pleas_mark'] = "点数をつけてください";
$_LANG['Experience'] = "评价";
$_LANG['Experience_one'] = "スクリーンサイズはいかがですか?システム用の習慣ですか?部品の品質はどうですか。早くあなたの評価を書いて、みんなに分かち合いましょう。！";
$_LANG['Experience_two'] = "最大500ワード入力";
$_LANG['drop_pic'] = '写真を削除';
$_LANG['Personal_homepage'] = "個人用ページ";
$_LANG['oreder_core'] = "オーダーセンター";
$_LANG['user_core'] = "会員センター";
$_LANG['Trade_complaint'] = "交易纠纷";
$_LANG['Account_center'] = "アカウントセンター";
$_LANG['Shop_management'] = "店铺管理";
$_LANG['Store_backstage'] = "店铺后台";
$_LANG['business'] = "商家";
$_LANG['people_time'] = "收货人/下单日期";
$_LANG['Sub_order'] = "子订单";
$_LANG['reduction'] = "元に戻す";
$_LANG['order_user_desc'] = "尊敬的客户，由于您的商品有可能在不同商家，所以您的订单被拆分为多个子订单分开配送，给您带来的不便还请谅解。";
//20161214 end

$_LANG['seller_Grade'] = '商家等级';

//储值卡
$_LANG['user_one_code'] = "短信验证码不正确";
$_LANG['value_card_list'] = '储值卡列表';
$_LANG['overdue_time'] = "有效期至";
$_LANG['face_value_card'] = "面&nbsp;&nbsp;&nbsp;&nbsp;值";
$_LANG['card_type'] = '卡类别';
$_LANG['menuplatform_card'] = "平台";
$_LANG['value_card_info'] = "储值卡使用详情";
$_LANG['lab_card_id'] = '编号';
$_LANG['Use_the_amount_of'] = "使用金额";
$_LANG['use_value_card'] = '使用储值卡';
$_LANG['value_card_bind'] = '储值卡绑定';
$_LANG['card_bind_desc'] = '储值卡绑定与说明';
$_LANG['card_desc']['one'] = '在右侧输入储值卡卡号密码进行绑定';
$_LANG['card_desc']['two'] = '请仔细查阅储值卡使用范围';
$_LANG['value_card_filling'] = '储值卡充值';
$_LANG['value_card_unwrap'] = '储值卡解绑';
$_LANG['Buyer_impression'] = '买家印象';

/*2017模板 新增*/
//内容为空时
$_LANG['no_records'] = 'すみません、データがありません。';
$_LANG['no_brand_goods'] = 'このブランドはしばらく商品がありませんよ~';
$_LANG['no_store_goods'] = 'この業者はしばらく商品がありませんよ~';
$_LANG['no_bonus_keyong'] = 'ご主人様、まだ代金券を使っていません~';
$_LANG['no_bonus_daoqi'] = 'ご主人様、まだ代金券の期限が切れていません~';
$_LANG['no_bonus_end'] = 'ご主人様、割り勘はまだご利用いただいておりません';

$_LANG['no_coupons_keyong'] = 'ご主人様、まだ使ったことがありません代金券~';
$_LANG['no_coupons_use'] = 'ご主人様、まだクーポンをお使いになっておりません~';
$_LANG['no_coupons_over'] = 'ご主人様、まだクーポンの有効期限が切れていません~';
$_LANG['no_coupons_soon_over'] = 'ご主人様、期限切れのクーポンはございません~';
$_LANG['after_service_desc'] = '拒絶理由';

$_LANG['user']['default']['no_records'] = 'ご主人様、近々何もお買い上げになっておりませんよ~';
$_LANG['user']['order_list']['no_records'] = 'ご主人様、まだ何もお買い上げになっていませんよ~';
$_LANG['user']['booking_list']['no_records'] = 'ご主人様、まだ品切れの登録商品はございませんよ~';
$_LANG['user']['return_list']['no_records'] = 'ご主人様、まだ返品注文はございませんよ~';
$_LANG['user']['crowdfunding']['no_records'] = '主人，您还没有支持的任何项目哟~';
$_LANG['user']['collection_list']['no_records'] = 'ご主人様、まだ私のコレクションをコレクションしていませんよ~';
$_LANG['user']['store_list']['no_records'] = 'ご主人様、まだ何のお店にも注目していませんよ~';
$_LANG['user']['focus_brand']['no_records'] = 'ご主人様、まだブランドに注目していませんよ~';
$_LANG['user']['comment_list_0']['no_records'] = 'コメントできるオーダーはありませんよ~';
$_LANG['user']['comment_list_1']['no_records'] = '追加注文はありませんよ~';
$_LANG['user']['comment_list_2']['no_records'] = 'コメントしたオーダーはありませんよ~';
$_LANG['user']['take_list']['no_records'] = 'ご主人様、まだ出荷情報がございませんよ~';
$_LANG['user']['value_card']['no_records'] = 'ご主人様、まだお預かりカードはございませんよ~';
$_LANG['user']['track_packages']['no_records'] = 'ご主人様、まだ小包を追跡していませんよ~';
$_LANG['user']['restore']['no_records'] = 'ご主人様、今注文を削除していませんよ~';
$_LANG['user']['order_recycle']['no_records'] = 'ご主人様、今注文を削除していませんよ~';
/*2017模板 新增end*/

$_LANG['trade_snapshot'] = '履歴取引';
$_LANG['malice_report']  = "悪意のある通報があり、通報権限が凍結されています。";
$_LANG['malice_report_end']  = "凍結有効期限: ";
$_LANG['handle_message']        = "回复";
$_LANG['handle_type']        = "处理结果";
$_LANG['handle_type_desc'][1]   = "无效举报--商品会正常销售";
$_LANG['handle_type_desc'][2]   = "恶意举报--您所有未处理举报将被无效处理，用户将被禁止举报";
$_LANG['handle_type_desc'][3]   = "有效举报--商品将被违规下架";
$_LANG['complaint_state'][0]       = "未处理";
$_LANG['complaint_state'][1]       = "待申诉";
$_LANG['complaint_state'][2]       = "对话中";
$_LANG['complaint_state'][3]       = "待仲裁";
$_LANG['complaint_state'][4]       = "完成";
$_LANG['complaint_info']           = "投诉信息";
$_LANG['appeal_info']              = "申诉详情";
$_LANG['appeal_content']        = "申诉内容";
$_LANG['appeal_img']            = "申诉图片";
$_LANG['complaint_time'] = "投诉时间";
$_LANG['talk_record'] = "对话记录";
$_LANG['talk_release'] = "发布对话";
$_LANG['talk_refresh'] = "刷新对话";
$_LANG['talk_info'] = "对话详情";
$_LANG['talk_member_type'][1]            = "投诉方";
$_LANG['talk_member_type'][2]            = "被投诉方";
$_LANG['talk_member_type'][3]            = "管理员";
$_LANG['end_handle_time'] = "处理时间";
$_LANG['complaint_handle_time'] = "初步审核时间";
$_LANG['handle_user'] = "操作人";
$_LANG['end_handle_messg'] = "处理意见";


$_LANG['need_invoice'][0] = "普通发票";
$_LANG['need_invoice'][1] = "增值税发票";


$_LANG['auction_staues'][0] = '未开始';
$_LANG['auction_staues'][1] = '进行中';
$_LANG['auction_staues'][2] = '已结束';
$_LANG['auction_staues'][3] = '已结束';

//退换货激活
$_LANG['activation_return'] = '激活';
$_LANG['activation_number_msg'] = '只能激活 %s 次，您不能激活了哦。。。';

$_LANG['change_type'] = '操作タイプ';
$_LANG['ip_address'] = "IPアドレス";
$_LANG['change_city'] = "地域";
$_LANG['logon_service'] = "ログインモード";

$_LANG['change_type_user'][1] = '会員登録';
$_LANG['change_type_user'][2] = '会員アイコンの変更';
$_LANG['change_type_user'][3] = '会員情報の変更';
$_LANG['change_type_user'][4] = '会員実名認証';
$_LANG['change_type_user'][5] = '会員がパスワードを支払う';
$_LANG['change_type_user'][6] = '会員の携帯電話を修正する';
$_LANG['change_type_user'][7] = '会員メールボックスの変更';
$_LANG['change_type_user'][8] = '会員登録パスワードの変更';
$_LANG['change_type_user'][9] = '会員信用限度額の修正';

$_LANG['merchants_upgrade_log'] = "事業者等級申請記録";
$_LANG['refund_price'] = "等级差额";
$_LANG['payable_amount'] = "应付金额";
$_LANG['back_price'] = "应退金额";
$_LANG['apply_status'] = "申请状态";
$_LANG['drop_confirm'] = "申请状态";
$_LANG['please_select_goods'] = "请选择需要退货的商品！";
$_LANG['nonsupport_return_goods'] = "包含不支持退货的商品，请重新选择";

$_LANG['cope_order_amount'] = '应付款';
$_LANG['should_back_amount'] = '应退款';
$_LANG['realpay_amount'] = '实付款';

//延迟收货
$_LANG['order_delayed'] = '商品を受け取る時間の延長';
$_LANG['auto_delivery_data']  = '自動商品を受け取時間の確認';
$_LANG['order_delay_day_desc'] = '終了時間が %s 日を超えても延長できません';
$_LANG['order_delay_apply_status'][0] = "&nbsp;&nbsp; 【%s】 &nbsp;日延期受入申請（審査中） ";
$_LANG['order_delay_apply_status'][1] = "&nbsp;&nbsp;  【%s】 &nbsp;日延期受入申請（通過した）";
$_LANG['order_delay_apply_status'][2] = "&nbsp;&nbsp; 【%s】 &nbsp;天延期收货申请（通過しなかった）";
$_LANG['order_delayed_repeat'] = 'この注文はすでに申請済みで、審査中です。';
$_LANG['order_delayed_success'] = '申請が正常に発行されました。レビューを待ってください。';
$_LANG['order_delayed_beyond'] = 'すでに %s 回を申請して延期受入を提出できない';
$_LANG['order_delayed_wrong'] = '不明なエラーが発生しました。再試行してください。！';
$_LANG['pay_effective_Invalid'] = '支払タイムアウト';
$_LANG['return_order_surplus'] = '由于取消、无效或退货操作，退回支付订单 %s 时使用的预付款';
$_LANG['return_order_integral'] = '由于取消、无效或退货操作，退回支付订单 %s 时使用的积分';
$_LANG['order_vcard_return'] = '【订单退款】储值卡退款金额：%s';

$_LANG['allow_order_delay'] = '延迟收货';

//批发
$_LANG['wholesale_reminder_one'] = '本次售后服务将由供应商';
$_LANG['wholesale_return_list'] = '采购退货单';
?>