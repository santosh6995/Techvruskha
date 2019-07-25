<?php

$usn1=$_POST['usn1'];
$name1=$_POST['name1'];
$comment1=$_POST['comment'];

$validusn=  preg_match("/^[1-4]{1}[A-Za-z]{2}\d{2}[A-Za-z]{2}\d{3}$/",$usn1);

mysql_connect("localhost", "root") or die("can't connect");
mysql_select_db("registration") or die("can't select registration db");

$sql1="SELECT usn FROM user1 WHERE usn='".$usn1."'";
$r1 = mysql_query($sql1);

 if(mysql_affected_rows()==0 || !$r1 || !$validusn)
 {
     
     header("Location:feedbackfail.xhtml"); 
 }
 else{
     
    mysql_query("insert into feedbacks values(NULL,'$usn1','$name1','$comment1')")
         or die("query failed");
header("Location:feedbacksuccess.xhtml");
 }




?>
