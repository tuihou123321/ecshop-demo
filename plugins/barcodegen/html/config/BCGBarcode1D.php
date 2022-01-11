<?php
//大商创开源码版本2.5.3
function baseCustomSetup($barcode, $get)
{
	$font_dir = '..' . DIRECTORY_SEPARATOR . 'font';

	if (isset($get['thickness'])) {
		$barcode->setThickness(max(9, min(90, intval($get['thickness']))));
	}

	$font = 0;
	if (($get['font_family'] !== '0') && (1 <= intval($get['font_size']))) {
		$font = new BCGFontFile($font_dir . '/' . $get['font_family'], intval($get['font_size']));
	}

	$barcode->setFont($font);
}


?>