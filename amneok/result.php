<?php
session_start();
require('class.php');
require("connect.php");
echo "<h1>Result</h1>";

$id=session_id();
$total=$mysql->query("SELECT `q_1`+`q_2`+`q_3`+`q_4`+`q_5`+`q_6`+`q_7`+`q_8`+`q_9`+`q_10`+`q_11`+`q_12`+`q_13`+`q_14`+`q_15`+`q_16`+`q_17`
+`q_18`+`q_19`+`q_20`+`q_21`+`q_22`+`q_23`+`q_24`+`q_25`
+`q_26`+`q_27`+`q_28`+`q_29`+`q_30`+ `q_31`+`q_32`+`q_33`+`q_34`+`q_35`+`q_36`+`q_37`+`q_38`+`q_39` +`q_40` AS `sum` FROM `user` WHERE `id`='$id'");
$row=$total->fetch_assoc();
$sum=$row["sum"];
echo "sum".$sum;
$mysql->query("UPDATE `user` SET `total`=$sum WHERE `id`='$id'");

session_destroy();

?>