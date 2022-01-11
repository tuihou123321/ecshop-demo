<?php
//大商创开源码版本2.5.3  禁止倒卖 一经发现停止任何服务
echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n<head>\r\n<title>";
echo $lang['upgrade_error_title'];
echo "</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
echo $ec_charset;
echo "\" />\r\n<link href=\"styles/general.css\" rel=\"stylesheet\" type=\"text/css\" />\r\n</head>\r\n\r\n<body class=\"body\">\r\n<div class=\"main\">\r\n\t";
include ROOT_PATH . 'upgrade/templates/header.php';
echo "    <div class=\"wrapper\">\r\n        <div class=\"w_content\">\r\n            ";
echo $err_msg;
echo "        </div>\r\n    </div>\r\n    ";
include ROOT_PATH . 'upgrade/templates/copyright.php';
echo "</div>\r\n</body>\r\n</html>";

?>
