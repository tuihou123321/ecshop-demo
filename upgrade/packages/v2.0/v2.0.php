<?php
//大商创开源码版本2.5.3  禁止倒卖 一经发现停止任何服务
class up_v2_0
{
	/**
     * 本升级包中SQL文件存放的位置（相对于升级包所在的路径）。每个版本类必须有该属性。
     */
	public $sql_files = array(
		'structure' => 'structure.sql',
		'data'      => array('zh_cn_utf-8' => 'data_zh_cn_utf-8.sql')
		);
	/**
     * 本升级包是否进行智能化的查询操作。每个版本类必须有该属性。
     */
	public $auto_match = true;

	public function __construct()
	{
	}

	public function up_v2_0()
	{
	}

	public function update_database_optionally()
	{
		global $db;
		global $ecs;
		include_once ROOT_PATH . 'includes/inc_constant.php';
		$sql = 'CREATE TABLE IF NOT EXISTS ' . $ecs->table('seckill') . " (\r\n  `sec_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '秒杀活动自增ID',\r\n  `acti_title` varchar(50) NOT NULL COMMENT '秒杀活动标题',\r\n  `acti_goods` varchar(255) NOT NULL COMMENT '活动商品ID 价格 数量',\r\n  `is_putaway` tinyint(1) NOT NULL DEFAULT '1' COMMENT '上下架',\r\n  `begin_time` int(11) NOT NULL COMMENT '秒杀活动开始时间',\r\n  `end_time` int(11) NOT NULL COMMENT '秒杀活动结束时间',\r\n  `add_time` int(11) NOT NULL COMMENT '秒杀活动添加时间',\r\n  PRIMARY KEY (`sec_id`)\r\n) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
		$db->query($sql);
		$sql = 'CREATE TABLE IF NOT EXISTS ' . $ecs->table('seckill_goods') . " (\r\n  `id` int(10) NOT NULL AUTO_INCREMENT,\r\n  `sec_id` int(10) NOT NULL,\r\n  `goods_id` int(10) NOT NULL,\r\n  `sec_price` decimal(10,2) NOT NULL,\r\n  `sec_num` smallint(5) NOT NULL,\r\n  `sec_limit` tinyint(3) NOT NULL,\r\n  PRIMARY KEY (`id`)\r\n) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
		$db->query($sql);
		$sql = 'ALTER TABLE ' . $ecs->table('ad') . ' ADD  `ad_bg_code` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER  `ad_code`;';
		$db->query($sql);
		$sql = 'ALTER TABLE ' . $ecs->table('ad') . ' ADD  `b_title` VARCHAR( 60 ) NOT NULL AFTER  `link_color` , ADD  `s_title` VARCHAR( 60 ) NOT NULL AFTER  `b_title`;';
		$db->query($sql);
		$sql = 'ALTER TABLE ' . $ecs->table('template') . ' ADD  `floor_tpl` SMALLINT( 5 ) NOT NULL DEFAULT  \'0\' COMMENT  \'首页楼层模板\';';
		$db->query($sql);
		$sql = 'ALTER TABLE ' . $ecs->table('brand') . ' ADD  `index_img` VARCHAR( 80 ) NOT NULL AFTER  `brand_logo`;';
		$db->query($sql);
		$sql = 'ALTER TABLE ' . $ecs->table('category') . ' ADD  `style_icon` VARCHAR( 50 ) NOT NULL DEFAULT  \'other\' AFTER  `top_style_tpl`;';
		$db->query($sql);
		$sql = 'ALTER TABLE ' . $ecs->table('seller_shopinfo') . ' CHANGE `templates_mode` `templates_mode` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT \'1\';';
		$db->query($sql);
		$sql = 'ALTER TABLE ' . $ecs->table('goods_activity') . ' ADD `is_new` TINYINT( 1 ) NOT NULL DEFAULT \'0\' AFTER `review_content` ;';
		$db->query($sql);
		$sql = 'ALTER TABLE ' . $ecs->table('merchants_grade') . ' CHANGE `ru_id` `ru_id` INT( 10 ) UNSIGNED NOT NULL DEFAULT \'0\', CHANGE `grade_id` `grade_id` INT( 10 ) UNSIGNED NOT NULL DEFAULT \'0\';';
		$db->query($sql);
		$sql = 'ALTER TABLE  ' . $ecs->table('seckill_goods') . ' ADD  `tb_id` INT( 10 ) NOT NULL COMMENT  \'秒杀时段ID\' AFTER  `sec_id`;';
		$db->query($sql);
		$sql = 'ALTER TABLE  ' . $ecs->table('seckill') . ' ADD  `acti_time` INT( 11 ) NOT NULL COMMENT  \'秒杀活动日期\' AFTER  `is_putaway`;';
		$db->query($sql);
		$sql = 'ALTER TABLE  ' . $ecs->table('seckill') . ' DROP  `begin_time` ;';
		$db->query($sql);
		$sql = 'ALTER TABLE  ' . $ecs->table('seckill') . ' DROP  `end_time` ;';
		$db->query($sql);
		$sql = 'ALTER TABLE  ' . $ecs->table('seckill') . ' DROP  `acti_goods`;';
		$db->query($sql);
		$sql = 'CREATE TABLE IF NOT EXISTS ' . $ecs->table('seckill_time_bucket') . " (\r\n\t\t  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '自增ID',\r\n\t\t  `begin_time` time NOT NULL COMMENT '开始时间段',\r\n\t\t  `end_time` time NOT NULL COMMENT '结束时间段',\r\n\t\t  `title` varchar(50) NOT NULL COMMENT '秒杀时段标题',\r\n\t\t  PRIMARY KEY (`id`),\r\n\t\t  UNIQUE KEY `begin_time` (`begin_time`,`end_time`),\r\n\t\t  UNIQUE KEY `title` (`title`)\r\n\t\t) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
		$db->query($sql);
		$sql = 'SELECT id FROM ' . $ecs->table('shop_config') . ' WHERE code = \'extend_basic\'';
		$config_id = $db->getOne($sql, true);
		$sql = 'INSERT INTO ' . $ecs->table('shop_config') . ' (`id` ,`parent_id` ,`code` ,`type`,`store_range` ,`store_dir` ,`value` ,`sort_order`) VALUES (NULL ,  \'' . $config_id . '\',  \'login_limited_num\',  \'hidden\',  \'\',  \'\',  \'3\',  \'30\');';
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('shop_config') . ' (`id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order`) VALUES (NULL, \'' . $config_id . '\', \'nav_cat_model\', \'select\', \'0,1\', \'\', \'0\', \'1\');';
		$db->query($sql);
		$sql = 'UPDATE ' . $ecs->table('seller_shopinfo') . ' SET `templates_mode` = 1 WHERE 1;';
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('shop_config') . ' (`id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order`) VALUES (NULL, \'' . $config_id . '\', \'index_article_cat\', \'text\', \'\', \'\', \'\', \'1\');';
		$db->query($sql);
		$sql = 'SELECT id FROM ' . $ecs->table('shop_config') . ' WHERE code = \'sms\'';
		$config_id = $db->getOne($sql, true);
		$sql = 'INSERT INTO ' . $ecs->table('shop_config') . ' ( `parent_id` , `code` , `type` , `store_range` , `value` , `sort_order` ) VALUES ( ' . $config_id . ', \'user_account_code\', \'select\', \'1,0\', 1, 17 );';
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('mail_templates') . ' ( `template_code` , `is_html` , `template_subject` , `template_content` , `type` ) VALUES (\'user_account_code\', 1, \'会员提现充值模板\', \'尊敬的' . '{' . '$' . 'smsParams.user_name' . '}' . ',您于{' . '$' . 'smsParams.add_time' . '}' . '发出的{' . '$' . 'smsParams.fmt_amount}元' . '{' . '$' . 'smsParams.process_type' . '}申请于{' . '$' . 'smsParams.op_time' . '}{' . '$' . 'smsParams.examine' . '}审核，账户余额为：' . '{' . '$' . 'smsParams.user_money' . '}。祝您购物愉快。\', \'template\');';
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'首页大轮播图\', \'1920\', \'516\', \'index_ad[num_id]\', \'num_id-数量序号\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '登录页广告', '1920', '530', 'login_banner[num_id]', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'regist_banner\', \'400\', \'324\', \'注册页面左侧banner图\', \'注册页面左侧banner图\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '达人专区广告', '99', '72', 'expert_field_ad[num_id]', 'num_id-数量序号', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '首页楼层轮播图', '232', '570', 'cat_goods_banner[num_id]_[cat_id]', 'num_id-数量序号，cat_id-分类ID', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '首页楼层左侧广告图', '232', '280', 'cat_goods_ad_left[num_id]_[cat_id]', 'num_id-数量序号，cat_id-分类ID', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '首页楼层右侧广告图', '232', '280', 'cat_goods_ad_right[num_id]_[cat_id]', 'num_id-数量序号，cat_id-分类ID', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '左侧分类导航广告', '199', '97', 'cat_tree_[cat_id]_[num_id]', 'num_id-数量序号，cat_id-分类ID', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'首页推荐分类广告位\', \'232\', \'330\', \'recommend_category[num_id]\', \'num_id-数量序号\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '促销广告位', '1920', '500', 'activity_top_ad[name][act_id]', 'name-广告位显示页面名称,act_id-活动id（可为空）', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '店铺街广告', '1920', '200', 'store_street_ad[num_id]', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类页（家电模板）轮播图', '970', '295', 'top_style_elec_banner[num_id]_[cat_id]', 'num_id-数量序号，cat_id-分类ID', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'全部商品分类页右边广告\', \'200\', \'130\', \'category_all_right[num_id]_[cat_id]\', \'num_id-数量序号，cat_id-分类ID\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类页全部分类右侧广告', '210', '410', 'cate_layer_elec_row_[cat_id]', 'num_id-数量序号', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类页轮播右侧广告', '245', '340', 'top_style_right_banner[num_id]_[cat_id]', 'cat_id-分类ID', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类页（食品模板）轮播图', '774', '400', 'top_style_food_banner[num_id]_[cat_id]', 'num_id-数量序号，cat_id-分类ID', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类页（家电模板）品牌右侧广告', '400', '150', 'top_style_elec_brand[num_id]_[cat_id]', 'num_id-数量序号，cat_id-分类ID', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类页（家电模板）品牌左侧广告', '350', '300', 'top_style_elec_brand_left_[cat_id]', 'cat_id-分类id', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类页（家电模板）楼层左侧广告', '280', '460', 'top_style_elec_left[num_id]_[cat_id]', 'num_id-数量序号，cat_id-分类ID', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类页（家电模板）楼层横幅广告', '1200', '100', 'top_style_elec_row_[cat_id]', 'num_id-数量序号', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类页（食品模板）精品推荐', '240', '350', 'top_style_food_hot[num_id]_[cat_id]', 'num_id-数量序号，cat_id-分类ID', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类页（食品模板）楼层横幅广告', '1200', '120', 'top_style_food_row_[cat_id]', 'cat_id-分类ID', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类页（食品模板）楼层左侧广告', '580', '440', 'top_style_food_left[num_id]_[cat_id]', 'num_id-数量序号，cat_id-分类ID', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'顶级分类页（女装、内衣、中老年）轮播图\', \'1903\', \'327\', \'cat_top_ad[num_id]_[cat_id]\', \'num_id-数量序号，cat_id-分类ID\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'顶级分类（女装、内衣、中老年）楼层广告\', \'400\', \'660\', \'cat_top_floor_ad[num_id]_[cat_id]\', \'num_id-数量序号，cat_id-分类ID\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类（女装、内衣、中老年）楼层右侧广告', '399', '170', 'cat_top_floor_ad_right[num_id]_[cat_id]', 'num_id-数量序号，cat_id-分类ID', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '品牌首页轮播图', '1920', '300', 'brand_index_ad[num_id]', 'num_id-数量序号', '<table cellpadding=\"0\" cellspacing=\"0\">\n{foreach from=" . $ads . " item=ad}\n<tr><td>" . $ad . "</td></tr>\n{/foreach}\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'首页推荐店铺广告位\', \'386\', \'187\', \'recommend_merchants[num_id]_[cat_id]\', \'num_id-数量序号\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '入驻首页头部广告', '1920', '385', 'merchants_index_top[num_id]', '[num_id]-数量序号', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '入驻首页推荐类目', '98', '85', 'merchants_index_category_ad[num_id]_[cat_id]', 'num_id-数量序号，cat_id-分类ID', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '入驻首页成功案例', '282', '200', 'merchants_index_case_ad[num_id]', '[num_id]-广告位编号', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'首页楼层广告\', \'1200\', \'80\', \'floor_banner[cat_id]\', \'cat_id-分类ID\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'首页顶部广告\', \'1200\', \'80\', \'top_banner\', \'直接填写广告名称\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '首页品牌街轮播图', '484', '178', 'index_brand_banner[num_id]', 'num_id-数量序号', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类页（默认）轮播图', '1920', '390', 'category_top_banner[num_id]_[cat_id]', 'num_id-数量序号，cat_id-分类ID', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类页（默认）今日推荐头部广告', '400', '120', 'category_top_default_best_head[num_id]', 'num_id-数量序号', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类页（默认）新品到货头部广告', '400', '120', 'category_top_default_new_head[num_id]', 'num_id-数量序号', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类页（默认）今日推荐左侧广告', '480', '280', 'category_top_default_best_left[num_id]', 'num_id-数量序号', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '顶级分类页（默认）新品到货左侧广告', '480', '280', 'category_top_default_new_left[num_id]', 'num_id-数量序号', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'预售首页招牌推荐中间轮播广告\', \'600\', \'300\', \'presale_banner_small[num_id]\', \'num_id-数量序号\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'预售首页招牌推荐左右侧广告\', \'300\', \'300\', \'presale_banner_small_right[num_id]\', \'num_id-数量序号\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'预售首页大轮播图\', \'1022\', \'380\', \'presale_banner[num_id]\', \'num_id-数量序号\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'预售新品广告位\', \'1200\', \'380\', \'presale_banner_new[num_id]\', \'num_id-数量序号\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'预售分类广告位\', \'1022\', \'380\', \'presale_banner_category[num_id]\', \'num_id-数量序号\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'预售抢先订广告位\', \'1022\', \'380\', \'presale_banner_advance[num_id]\', \'num_id-数量序号\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'优惠券首页轮播图广告\', \'900\', \'300\', \'coupons_index[num_id]\', \'num_id-数量序号\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '众筹首页轮播图', '1200', '380', 'zc_index_banner[num_id]', 'num_id-数量序号', '<table cellpadding=\"0\" cellspacing=\"0\">\n{foreach from=" . $ads . " item=ad}\n<tr><td>" . $ad . "</td></tr>\n{/foreach}\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (" VALUES (NULL, '0', '批发头部广告', '1200', '300', 'wholesale_ad[num_id]', '[num_id]-数量序号', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=" . $ads . " item=ad}\r\n<tr><td>" . $ad . "</td></tr>\r\n{/foreach}\r\n</table>', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
		$sql = 'INSERT INTO ' . $ecs->table('ad_position') . (' VALUES (NULL, \'0\', \'秒杀列表页顶部广告位\', \'1920\', \'190\', \'seckill_top_ad[num_id]\', \'num_id-数量序号\', \'{foreach from=' . $ads . " item=ad}\r\n" . $ad . "\r\n{/foreach}', '0', 'ecmoban_dsc2017');");
		$db->query($sql);
	}

	public function update_files()
	{
		$result = file_mode_info(ROOT_PATH . 'data/');

		if ($result < 2) {
			exit('ERROR, ' . ROOT_PATH . 'data/ isn\'t a writeable directory.');
		}

		if (!file_exists(ROOT_PATH . 'data/config.php')) {
			if (file_exists(ROOT_PATH . 'includes/config.php')) {
				copy(ROOT_PATH . 'includes/config.php', ROOT_PATH . 'data/config.php');
			}
			else {
				exit('ERROR, can\'t find config.php.');
			}
		}

		if (!file_exists(ROOT_PATH . 'data/install.lock.php')) {
			if (file_exists(ROOT_PATH . 'includes/install.lock.php')) {
				copy(ROOT_PATH . 'includes/install.lock.php', ROOT_PATH . 'data/install.lock.php');
			}
			else {
				exit('ERROR, can\'t find install.lock.php.');
			}
		}
	}
}


?>
