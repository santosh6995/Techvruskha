<?php

$login_id=$_POST['login_id'];
$password=$_POST['password'];

mysql_connect("localhost", "root") or die("can't connect");
mysql_select_db("registration") or die("can't select registration db");

$sql="SELECT usn FROM user1 WHERE usn='".$login_id."' and password='".$password."'";
$r = mysql_query($sql);
if(!$r)
{
    $err=mysql_error();
    print $err;
    exit();
 }
 if(mysql_affected_rows()==0)
 {
     
     header("Location:loginunsuccess.html");
 }
 else{
     header("Location:homepage.html");
 }



?>
