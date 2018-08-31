<?php
define("IN_QKWEB",true);
require("inc/inc.php");
$code = $_GET['code'];
if($code=='kf'){
	$url = '/error';
}else{
	$sql = "select url from qk_url where alias='$code' and iStatus=1";
	$url = $db->getOne($sql);
        $sql = "select url from qk_url where alias='$code' and iStatus=0";
	$url = '/badnet';}
if($url){
Header("Location:$url\n");
}else{
echo '<script language="javascript" type="text/javascript"> window.location.href="http://3mg.top/error"; </script> ';
}
?>
