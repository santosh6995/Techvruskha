<?php
$stext=$_POST['stext'];
$stext1=$_POST['stext1'];
$gtext2=$_POST['gtext2'];
$gtext3=$_POST['gtext3'];
$radio=$_POST['radio'];

$stext4=$_POST['stext4'];
$gtext5=$_POST['gtext5'];

$usnvalid=preg_match("/^[1-4]{1}[a-z]{2}\d{2}[a-z]{2}\d{3}$/",$stext);
$usnvalid2=preg_match("/^[1-4]{1}[a-z]{2}\d{2}[a-z]{2}\d{3}$/",$stext1);
$usnvalid3=preg_match("/^[1-4]{1}[a-z]{2}\d{2}[a-z]{2}\d{3}$/",$gtext2);
$usnvalid4=preg_match("/^[1-4]{1}[a-z]{2}\d{2}[a-z]{2}\d{3}$/",$gtext3);

$usnvalid5=preg_match("/^[1-4]{1}[a-z]{2}\d{2}[a-z]{2}\d{3}$/",$stext4);
$usnvalid6=preg_match("/^[1-4]{1}[a-z]{2}\d{2}[a-z]{2}\d{3}$/",$gtext5);

mysql_connect("localhost", "root") or die("can't connect");
mysql_select_db("registration") or die("can't select registration db");


if($radio==1 && $usnvalid)
{
    mysql_query("insert into activity values(NULL,'$stext',NULL,NULL)") or die("query failed go back and register again");
header("Location:success.xhtml");
}


else if($radio==2 && $usnvalid5 && $usnvalid6){
    mysql_query("insert into activity values(NULL,'$stext4','$gtext5','NULL')") or die("query failed");
header("Location:success.xhtml");
}


else if($radio==3 && $usnvalid2 && $usnvalid3 && $usnvalid4){
    mysql_query("insert into activity values(NULL,'$stext1','$gtext2','$gtext3')") or die("query failed");
header("Location:success.xhtml");
}
else{
    header("Location:unsuccess.xhtml");
}




?>
