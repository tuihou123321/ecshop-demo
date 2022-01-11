<?php
//大商创开源码版本2.5.3
function customSetup($barcode, $get)
{
	if (isset($get['start'])) {
		$barcode->setStart($get['start'] === 'NULL' ? NULL : $get['start']);
	}
}

$classFile = 'BCGcode128.barcode.php';
$className = 'BCGcode128';
$baseClassFile = 'BCGBarcode1D.php';
$codeVersion = '5.2.0';

?>
