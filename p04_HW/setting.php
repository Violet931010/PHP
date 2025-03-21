<?php
session_start();
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>the setting page</title>
</head>

<body>
<?php
if(isset($_SESSION["Adminer"])){

    echo "Welcome!Adminer:".$_SESSION["Adminer"]."<br>";
    echo "<a href = logoutpage.php>Logout</a><br>";

}elseif(isset($_SESSION["User"])){
    echo "Welcome!User:".$_SESSION["User"]."<br>";
    echo "<a href = logoutpage.php>Logout</a><br>";

}else{
    echo "Illegal user! Please enter it again.";
    header("Refresh:30; url=loginpage.php");
}
?>

</body>
</html>