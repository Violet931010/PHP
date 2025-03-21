<?php
if(isset($_COOKIE["AdminerOrUserName"])){
    echo "Welcome back!".$_COOKIE["AdminerOrUserName"];
}




?>

<h1>Please Login to use the System</h1>

<form action="logincheckpage.php" method="POST">

Please input your adminername or username:<input type="text" name="AdminerOrUserName"><br>
Please input your password:<input type="password" name="AdminerOrUserPwd"><br>
<input type="submit"><input type="reset"><br>

</form>

<?php
date_default_timezone_set("Asia/Taipei");
echo time();
echo "Time now:"."<br>";
echo date("Y-m-d H-i-s");
?>