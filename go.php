<?php
define("IN_QKWEB",true);
require("inc/inc.php");
$code = $_GET['code'];
if($code=='kf'){
	$url = '/error';
}else{
	$sql = "select url from qk_url where alias='$code' and iStatus=1";   //当status情况为1
	$url = $db->getOne($sql);                                           //get 正确sql位置
        $sql = "select url from qk_url where alias='$code' and iStatus=0";  //当status情况为0
	$url = '/badnet';}						//跳转badnet
//添加istatus 使用$sql

if($url){
Header("Location:$url\n");
}else{
echo '<script language="javascript" type="text/javascript"> window.location.href="http://3mg.top/error"; </script> ';
}
?>
