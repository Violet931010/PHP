<?php

$uName=$_GET["uName"];
$uNumber=$_GET["uNumber"];
$uGender=$_GET["uGender"];
$uPwd=$_GET["uPwd"];
$uPhone=$_GET["uPhone"];
$uBirth=$_GET["uBirth"];
$uEmail=$_GET["uEmail"];
$uColor=$_GET["uColor"];
$uFood=isset($_GET["uFood"]) ? $_GET["uFood"] : [];
$uJoin=$_GET["uJoin"];
$uComment=$_GET["uComment"];


echo "姓名：".$uName."<br>";
echo "學號：".$uNumber."<br>";
echo "性別：".$uGender."<br>";
echo "身分證字號：".$uPwd."<br>";
echo "電話：".$uPhone."<br>";
echo "生日：".$uBirth."<br>";
echo "電子郵件：".$uEmail."<br>";
echo "系服想製作顏色：".$uColor."<br>";
echo "吃葷還吃素：".implode(",",$uFood)."<br>";
echo "參加不參加：".$uJoin."<br>";
echo "Q&A：".nl2br($uComment);
?>
