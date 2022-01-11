<?php
//大商创开源码版本2.5.3
ob_start();
include dirname(__FILE__) . '/res/exemple04.php';
$content = ob_get_clean();
require_once dirname(__FILE__) . '/../html2pdf.class.php';

try {
	$html2pdf = new HTML2PDF('P', 'A4', 'fr');
	$html2pdf->pdf->SetDisplayMode('fullpage');
	$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
	$html2pdf->Output('exemple04.pdf');
}
catch (HTML2PDF_exception $e) {
	echo $e;
	exit();
}

?>