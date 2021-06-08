<?php
//error_reporting设置应该报告的错误，下面表示除了 E_NOTICE，报告其他所有错误
error_reporting(E_ALL ^ E_NOTICE);
//输出错误
ini_set('display_errors', 1);
$new_ip = $_POST["nip"];
$myfile = fopen("./curip.json", "w");
$dstring = date('Y-m-d h:i:s', time());
fwrite($myfile,json_encode({"cip":$new_ip,"udt":$dstring}));
