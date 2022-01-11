<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title">自营 - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                    <li>请准确无误的设置店铺信息。</li>
                    <li>其中部分店铺信息需要其他地方先配置，比如配送方式等。</li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <form action="index.php?act=merchants_second" method="post" name="theForm" enctype="multipart/form-data" id="merchants_second">
                            <div class="switch_info">
                                <div class="item">
                                    <div class="label"><?php if ($this->_var['priv_ru']): ?><?php echo $this->_var['lang']['steps_shop_name']; ?><?php else: ?><?php echo $this->_var['lang']['company_name']; ?><?php endif; ?>：</div>
                                    <div class="label_value">
										<input type="text" name="shop_name" value="<?php echo $this->_var['shop_info']['shop_name']; ?>" size="40" class="text" autocomplete="off" />
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
								<?php if (! $this->_var['priv_ru']): ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['settled_shop_name']; ?>：</div>
                                    <div class="label_value">
										<input type="text" name="brand_shop_name" value="<?php echo $this->_var['shop_information']['shop_name']; ?>" disabled="disabled" size="40" class="text" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['expect_shop_name']; ?>：</div>
                                    <div class="label_value">
										<input type="text" name="ec_rz_shopName" value="<?php echo $this->_var['shop_information']['rz_shopName']; ?>" disabled="disabled" size="40" class="text" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['display_shop_name']; ?>：</div>
                                    <div class="label_value">
										<label class="mr10"><input type="radio" name="check_sellername" value="0" class="checkbox" <?php if ($this->_var['shop_info']['check_sellername'] == 0): ?>checked="checked"<?php endif; ?> /><?php echo $this->_var['lang']['settled_brand_shop_name']; ?></label>
										<label class="mr10"><input type="radio" name="check_sellername" value="1" class="checkbox" <?php if ($this->_var['shop_info']['check_sellername'] == 1): ?>checked="checked"<?php endif; ?> /><?php echo $this->_var['lang']['expect_shop_name']; ?></label>
										<label><input type="radio" name="check_sellername" value="2" class="checkbox" <?php if ($this->_var['shop_info']['check_sellername'] == 2): ?>checked="checked"<?php endif; ?> /><?php echo $this->_var['lang']['company_name']; ?></label>
										<?php if ($this->_var['shop_info']['shopname_audit'] == 1): ?>
											&nbsp;&nbsp;<font class="red"><?php echo $this->_var['lang']['already_examine']; ?></font>
										<?php else: ?>
											&nbsp;&nbsp;<font class="org"><?php echo $this->_var['lang']['stay_examine']; ?></font>
										<?php endif; ?>
                                    </div>
                                </div>								
								<?php endif; ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['shop_title']; ?>：</div>
                                    <div class="label_value">
										<input type="text" name="shop_title" value="<?php echo $this->_var['shop_info']['shop_title']; ?>" class="text" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['shop_keyword']; ?>：</div>
                                    <div class="label_value">
										<input type="text" name="shop_keyword" value="<?php echo $this->_var['shop_info']['shop_keyword']; ?>" class="text" autocomplete="off" />
                                    </div>
                                </div>								
                                <div class="item">
                                    <div class="label">店铺二级域名：</div>
                                    <div class="label_value">
										<input type="text" size="40" value="<?php echo $this->_var['shop_info']['domain_name']; ?>" name="domain_name" class="text" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['shop_country']; ?>：</div>
                                    <div class="label_value">
										<div id="dlcountry" class="ui-dropdown smartdropdown alien">
                                            <input type="hidden" value="<?php echo $this->_var['shop_info']['country']; ?>" name="shop_country" id="selcountry">
                                            <div class="txt">国家</div>
                                            <i class="down u-dropdown-icon"></i>
                                            <div class="options clearfix" style="max-height:300px;">
                                                <?php $_from = $this->_var['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                                <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="1"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['shop_province']; ?>：</div>
                                    <div class="label_value">
                                        <div id="dlProvinces" class="ui-dropdown smartdropdown alien">
                                            <input type="hidden" value="<?php echo $this->_var['shop_info']['province']; ?>" name="shop_province" id="selProvinces">
                                            <div class="txt">省/直辖市</div>
                                            <i class="down u-dropdown-icon"></i>
                                            <div class="options clearfix" style="max-height:300px;">
                                                <?php $_from = $this->_var['provinces']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                                <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="2"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['shop_city']; ?>：</div>
                                    <div class="label_value">
                                        <div id="dlCity" class="ui-dropdown smartdropdown alien">
                                            <input type="hidden" value="<?php echo $this->_var['shop_info']['city']; ?>" name="shop_city" id="selCities">
                                            <div class="txt">市</div>
                                            <i class="down u-dropdown-icon"></i>
                                            <div class="options clearfix" style="max-height:300px;">
                                                <?php $_from = $this->_var['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                                <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="3"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['local_area']; ?>：</div>
                                    <div class="label_value">
                                        <div id="dlRegion" class="ui-dropdown smartdropdown alien">
                                            <input type="hidden" value="<?php echo $this->_var['shop_info']['district']; ?>" name="shop_district" id="selDistricts">
                                            <div class="txt">区/县</div>
                                            <i class="down u-dropdown-icon"></i>
                                            <div class="options clearfix" style="max-height:300px;">
                                                <?php $_from = $this->_var['districts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                                <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="4"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['shop_address']; ?>：</div>
                                    <div class="label_value">
										<input type="text" name="shop_address" value="<?php echo $this->_var['shop_info']['shop_address']; ?>" class="text" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['03_shipping_list']; ?>：</div>
                                    <div class="label_value">
										<div id="shipping_id_div" class="imitate_select select_w320">
											<div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
											<ul>
												<li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['please_select']; ?></a></li>
												<?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
												<?php if ($this->_var['ru_id'] == 0 || ( $this->_var['ru_id'] > 0 && $this->_var['list']['shipping_code'] != 'cac' )): ?>
												<li><a href="javascript:;" data-value="<?php echo $this->_var['list']['shipping_id']; ?>" class="ftx-01"><?php echo $this->_var['list']['shipping_name']; ?></a></li>
												<?php endif; ?>
												<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>												
											</ul>
											<input name="shipping_id" type="hidden" value="<?php echo $this->_var['shop_info']['shipping_id']; ?>" id="shipping_id">
										</div>
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label">客服手机号码：</div>
                                    <div class="label_value">
										<input type="text" size="40" value="<?php echo $this->_var['shop_info']['mobile']; ?>" name="mobile" class="text" autocomplete="off" />
                                    	<div class="notic"><?php echo $this->_var['lang']['mobile_prompt']; ?></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['customer_service_address']; ?>：</div>
                                    <div class="label_value">
										<input type="text" size="40" value="<?php echo $this->_var['shop_info']['seller_email']; ?>" name="seller_email" class="text" autocomplete="off" />
                                    	<div class="notic"><?php echo $this->_var['lang']['seller_email_prompt']; ?></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['customer_service_qq']; ?>：</div>
                                    <div class="label_value">
										<textarea name='kf_qq' value="<?php echo $this->_var['shop_info']['kf_qq']; ?>" rows="6" cols="48" class="textarea"><?php echo $this->_var['shop_info']['kf_qq']; ?></textarea>
										<div class="notic"><?php echo $this->_var['lang']['kf_qq_prompt']; ?></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['customer_service_taobao']; ?>：</div>
                                    <div class="label_value">
										<textarea name='kf_ww' value="<?php echo $this->_var['shop_info']['kf_ww']; ?>" rows="6" cols="48" class="textarea"><?php echo $this->_var['shop_info']['kf_ww']; ?></textarea>
										<div class="notic"><?php echo $this->_var['lang']['kf_ww_prompt']; ?></div>
                                    </div>
                                </div>
								<!-- 平台 IM start -->
								<?php if ($this->_var['shop_information']['is_IM'] == 1 || $this->_var['shop_information']['is_dsc']): ?>
								<?php if ($this->_var['shop_information']['is_dsc']): ?>
                                <div class="item">
                                    <div class="label">是否开启IM在线客服：</div>
                                    <div class="label_value">
                                    	<div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="radio" name="kf_im_switch" value="1" class="ui-radio" id="kf_im_switch1" <?php if ($this->_var['shop_info']['kf_im_switch'] == 1): ?> checked="checked" <?php endif; ?>>
                                                <label class="ui-radio-label" for="kf_im_switch1">开启</label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" name="kf_im_switch" value="0" class="ui-radio" id="kf_im_switch0" <?php if ($this->_var['shop_info']['kf_im_switch'] == 0): ?> checked="checked" <?php endif; ?>>
                                                <label class="ui-radio-label" for="kf_im_switch0">关闭</label>
                                            </div>
                                            <div class="fn_notic">开启后即可使用IM在线客服,否则只能使用默认的 (平台)</div>
                                        </div>
                                    </div>
                                </div>
								<?php endif; ?>
                                <div class="item">
                                    <div class="label">在线客服账号：</div>
                                    <div class="label_value">
										<input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_touid']; ?>" name="kf_touid" class="text text_1" autocomplete="off" />
										<div class="notic">在<a target="_blank" href="http://my.open.taobao.com/app/app_list.htm"> 淘宝开放平台 </a>已开通云旺客服的账号。</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label">在线客服appkey：</div>
                                    <div class="label_value">
										<input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_appkey']; ?>" name="kf_appkey" class="text text_1" autocomplete="off" />
										<div class="notic">在淘宝开放平台创建一个应用(百川无线)即可获得appkey。</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label">在线客服secretkey：</div>
                                    <div class="label_value">
										<input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_secretkey']; ?>" name="kf_secretkey" class="text text_1" autocomplete="off" />
										<div class="notic">在淘宝开放平台创建一个应用(百川无线)即可获得secretkey。</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label">在线客服头像LOGO：</div>
                                    <div class="label_value">
										<input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_logo']; ?>" name="kf_logo" class="text text_1" autocomplete="off" />
										<div class="notic">直接黏贴图片网址(推荐40 x 40),不填即使用默认头像。</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label">在线客服欢迎信息：</div>
                                    <div class="label_value">
										<input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_welcomeMsg']; ?>" name="kf_welcomeMsg" class="text text_1" autocomplete="off" />
										<div class="notic">向用户发送的一条欢迎信息。</div>
                                    </div>
                                </div>								
								<?php endif; ?>
								<!-- 平台 IM end -->
								<!-- 美洽客服 start -->
                                <div class="item">
                                    <div class="label">美洽客服：</div>
                                    <div class="label_value">
										<input type="text" size="40" value="<?php echo $this->_var['shop_info']['meiqia']; ?>" name="meiqia" class="text" autocomplete="off" />
										<div class="notic">此功能仅手机端（wap）使用</div>
                                    </div>
                                </div>
								<!-- 美洽客服 end -->
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['customer_service_tel']; ?>：</div>
                                    <div class="label_value">
										<input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_tel']; ?>" name="kf_tel" class="text" autocomplete="off" />
                                    	<div class="notic"><?php echo $this->_var['lang']['kf_tel_prompt']; ?></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['customer_service_css']; ?>：</div>
                                    <div class="label_value">
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="kf_type" id="kf_type_0" value="0" <?php if ($this->_var['shop_info']['kf_type'] == 0): ?> checked="true" <?php endif; ?>  />
                                                <label for="kf_type_0" class="ui-radio-label"><?php echo $this->_var['lang']['QQ_kf']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="kf_type" id="kf_type_1" value="1" <?php if ($this->_var['shop_info']['kf_type'] == 1): ?> checked="true" <?php endif; ?>  />
                                                <label for="kf_type_1" class="ui-radio-label"><?php echo $this->_var['lang']['wangwang_kf']; ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<?php if ($this->_var['ru_id']): ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['seller_logo']; ?>：</div>
                                    <div class="label_value">
										<input type="file" name="shop_logo" class="file mt5 mb5"/><label class="blue_label">(无限制*128像素)</label><br />
										<?php if ($this->_var['shop_info']['shop_logo']): ?>
										<div class="seller_img"><img src="<?php echo $this->_var['shop_info']['shop_logo']; ?>" width="150" /></div>
										<?php endif; ?>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['logo_sbt']; ?>：</div>
                                    <div class="label_value">
										<input type="file" name="logo_thumb" class="file mt5 mb5"/><label class="blue_label">(80*80像素)</label><br />
										<?php if ($this->_var['shop_info']['logo_thumb']): ?>
										<div class="seller_img"><img src="<?php echo $this->_var['shop_info']['logo_thumb']; ?>" width="80" height="80" /></div>
										<?php endif; ?>
                                    </div>
                                </div>
								<div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['shop_street_sbt']; ?>：</div>
                                    <div class="label_value">
										<input type="file" name="street_thumb" class="file mt5 mb5"/><label class="blue_label">(388*187像素)</label><br />
										<?php if ($this->_var['shop_info']['street_thumb']): ?>
										<div class="seller_img"><img src="../<?php echo $this->_var['shop_info']['street_thumb']; ?>" width="128" height="62" /></div>
										<?php endif; ?>
                                    </div>
                                </div>
								<div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['shop_street_brand_sbt']; ?>：</div>
                                    <div class="label_value">
										<input type="file" name="brand_thumb" class="file mt5 mb5"/><label class="blue_label">(180*60像素)</label><br />
										<?php if ($this->_var['shop_info']['brand_thumb']): ?>
										<div class="seller_img"><img src="../<?php echo $this->_var['shop_info']['brand_thumb']; ?>" width="180" height="60" /></div>
										<?php endif; ?>
                                    </div>
                                </div>
								<div class="item">
                                    <div class="label">二维码中间Logo: </div>
                                    <div class="label_value">
										<input type="file" name="qrcode_thumb"/><label class="blue_label">(80*80像素)</label><br />
										<?php if ($this->_var['shop_info']['qrcode_thumb']): ?>
										<img src="<?php echo $this->_var['shop_info']['qrcode_thumb']; ?>" width="80" height="80" /> 
										<?php endif; ?>
                                    </div>
                                </div>
								<div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['shop_street_desc']; ?>：</div>
                                    <div class="label_value">
										<textarea name="street_desc" class="textarea"><?php echo $this->_var['shop_info']['street_desc']; ?></textarea>
                                    </div>
                                </div>
								<?php endif; ?>
                                <div class="item">
                                    <div class="label">扫码appkey（极速数据）：</div>
                                    <div class="label_value">
										<input type="text" size="40" value="<?php echo $this->_var['shop_info']['js_appkey']; ?>" name="js_appkey" class="text text_1" autocomplete="off" id="code_appkey" />
										<div class="notic">在<a target="_blank" href="http://www.jisuapi.com/api/barcode2/"> 极速数据 </a>申请账号。</div>
                                    </div>
                                </div>	
                                <div class="item">
                                    <div class="label">扫码appsecret（极速数据）：</div>
                                    <div class="label_value">
										<input type="text" size="40" value="<?php echo $this->_var['shop_info']['js_appsecret']; ?>" name="js_appsecret" class="text text_1" autocomplete="off" />
                                    </div>
                                </div>	
								<!--快递鸟设置 start-->
                                <div class="item">
                                    <div class="label">快递单打印方式：</div>
                                    <div class="label_value">
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="print_type" id="print_type_0" value="0" <?php if ($this->_var['shop_info']['print_type'] == 0): ?> checked="true" <?php endif; ?>  />
                                                <label for="print_type_0" class="ui-radio-label">系统默认</label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="print_type" id="print_type_1" value="1" <?php if ($this->_var['shop_info']['print_type'] == 1): ?> checked="true" <?php endif; ?>  />
                                                <label for="print_type_1" class="ui-radio-label">快递鸟</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label">快递单打印机（快递鸟）：</div>
                                    <div class="label_value">
										<input type="text" size="40" value="<?php echo $this->_var['shop_info']['kdniao_printer']; ?>" name="kdniao_printer" class="text text_1" autocomplete="off" />
										<div class="notic">仅在设置打印方式为“快递鸟”时需要设置该项。</div>
                                    </div>
                                </div>								
								<!--快递鸟设置 end-->								
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['shop_notice']; ?>：</div>
                                    <div class="label_value">
										<textarea name="notice" class="textarea"><?php echo $this->_var['shop_info']['notice']; ?></textarea>
                                    </div>
                                </div>							
                                <div class="item">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value info_btn">
										<input type="hidden" name="data_op" value="<?php echo $this->_var['data_op']; ?>"/>
										<input type="submit" value="<?php echo $this->_var['lang']['subimt_info']; ?>" class="button" id="submitBtn" />
                                    </div>
                                </div>								
                            </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
    </div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<?php echo $this->smarty_insert_scripts(array('files'=>'../js/region.js')); ?>
	<script type="text/javascript" src="js/region.js"></script>
	<script type="Text/Javascript" language="JavaScript">
	$(function(){
		$.levelLink();
		
		//表单验证
		$("#submitBtn").click(function(){
			if($("#merchants_second").valid()){
				$("#merchants_second").submit();
			}
		});
		
		$('#merchants_second').validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('div.label_value').find('div.form_prompt');
				element.parents('div.label_value').find(".notic").hide();
				error_div.append(error);
			},
			rules:{
				shop_name:{
					required : true
				},
				shipping_id :{
					min : 1
				}
			},
			messages:{
				shop_name : {
					required : '<i class="icon icon-exclamation-sign"></i>店铺名称不能为空'
				},
				shipping_id:{
					 min : '<i class="icon icon-exclamation-sign"></i>请选择配送方式'
				}
			}			
		});
	});
	
	<!--
	
	region.isAdmin = true;

	onload = function()
	{
		if(document.getElementById('paynon')){
			document.getElementById('paynon').style.display = 'none';
		}
	}

	function show_shipping_area()
	{
	  Ajax.call('shipping.php?act=shipping_priv', '', shippingResponse, 'GET', 'JSON');
	}

	function shippingResponse(result)
	{
	  var shipping_name = document.getElementById('shipping_type');
	  if (result.error == '1' && result.message != '')
	  {
		alert(result.message);
		shipping_name.options[0].selected = true;
		return;
	  }
	  
	  var area = document.getElementById('shipping_area');
	  if(shipping_name.value == '')
	  {
		area.style.display = 'none';
	  }
	  else
	  {
		area.style.display = "block";
	  }
	}

	function loadConfig()
	{
	  var payment = document.forms['theForm'].elements['payment'];
	  var paymentConfig = document.getElementById('paymentConfig');
	  if(payment.value == '')
	  {
		paymentConfig.style.display = 'none';
		return;
	  }
	  else
	  {
		paymentConfig.style.display = 'block';
	  }
	  if(document.getElementById('paynon')){
		  if(payment.value == 'alipay')
		 {
		  document.getElementById('paynon').style.display = 'block';
		}
		else
		{
		  document.getElementById('paynon').style.display = 'none';
		}
	  }
		
	  var params = 'code=' + payment.value;

	  Ajax.call('payment.php?is_ajax=1&act=get_config', params, showConfig, 'GET', 'JSON');
	}

	<?php if ($this->_var['is_false'] && $this->_var['priv_ru']): ?>
	Ajax.call('users.php?is_ajax=1&act=main_user','', start_user, 'GET', 'TEXT','FLASE');
	function start_user(){
		//
	}
	<?php endif; ?>
	function showConfig(result)
	{
	  var payment = document.forms['theForm'].elements['payment'];
	  if (result.error == '1' && result.message != '')
	  {
		alert(result.message);
		payment.options[0].selected = true;
		return;
	  }
	  var paymentConfig = document.getElementById('paymentConfig');
	  var config = result.content;

	  paymentConfig.innerHTML = config;
	}
	<?php if ($this->_var['goods_false'] && $this->_var['priv_ru']): ?>
	Ajax.call('goods.php?is_ajax=1&act=main_dsc','', start_dsc, 'GET', 'TEXT','FLASE');
	function start_dsc(){
		//
	}
	<?php endif; ?>
	
	//-->
	</script>
</body>
</html>
