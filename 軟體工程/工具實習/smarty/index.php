<?php
require("main.php");
$hello = "Hello World!";
$str1="national Chung Cheng University";
$str2="Computer and ";
$str3="Time";
//$str4
$str5="add_8bit";
$str6="YOU CAN DO YOUR BEST !!!";
$str7="No pain,no gain.";

$smarty->assign("hello",$hello);
$smarty->assign("str1",$str1);
$smarty->assign("str2",$str2);
$smarty->assign("str3",$str3);
$smarty->assign("str5",$str5);
$smarty->assign("str6",$str6);
$smarty->assign("str7",$str7);

$array1[]= array("CMID"=>0, "CMTitle"=>"林瑋鴻");
$array1[]= array("CMID"=>1, "CMTitle"=>"宋明謙");
$array1[]= array("CMID"=>2, "CMTitle"=>"彭康展");
$array1[]= array("CMID"=>3, "CMTitle"=>"王耀慶");
$array1[]= array("CMID"=>4, "CMTitle"=>"嚴偉安");
$array1[]= array("CMID"=>5, "CMTitle"=>"黃子軒");
$array1[]= array("CMID"=>6, "CMTitle"=>"曾博彥");
$smarty->assign("CM",$array1);

$array2[0]="EA101";
$array2[1]="EA105";
$array2[2]="EA206";
$smarty->assign("CR",$array2);


$smarty->display('index.tpl');
?>
