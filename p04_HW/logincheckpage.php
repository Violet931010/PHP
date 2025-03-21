<?php
session_start();
?>
<h1>Login Result!</h1>
<?php

$defaultNameAdminer="teacher";
$defaultPwdAdminer="55688";

$defaultNameUser="Violet";
$defaultPwdUser="2231";

$adminerName=$_POST["AdminerOrUserName"];
$adminerPwd=$_POST["AdminerOrUserPwd"];

$userName=$_POST["AdminerOrUserName"];
$userPwd=$_POST["AdminerOrUserPwd"];

if($defaultNameAdminer==$adminerName && $defaultPwdAdminer==$adminerPwd){
    echo "Login success, hello".$adminerName;
    $_SESSION["Adminer"] = $adminerName;
    $cookiedate=strtotime("+10 second",time());
    setcookie("AdminerOrUserName",$defaultNameAdminer,$cookiedate);
    header("Location:setting.php");
}elseif($defaultNameUser==$userName && $defaultPwdUser==$userPwd){
    echo "Login success, hello".$userName;
    $_SESSION["User"] = $userName;
    $cookiedate=strtotime("+10 second",time());
    setcookie("AdminerOrUserName",$defaultNameUser,$cookiedate);
    header("Location:setting.php");
}else{
    echo "Login failed, will send you back to the login again.";
    header("Refresh:30; url='loginpage.php'");
}
?>