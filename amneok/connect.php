<?php
$host=$_SERVER['SERVER_NAME'];
$user="root";
$db="_dap_app";
$id=session_id();
$mysql=new mysqli("$host","$user","","$db");

//$res=$mysql->query("SELECT * FROM `user` WHERE `id`='$id'");
//$row=$res->fetch_assoc();
//echo "qqq w".$row["age"];
//echo " remote user".$_SERVER['REMOTE_ADDR'];


?>