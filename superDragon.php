<?php
session_start();

if(isset($_SESSION["name_login"]) && isset($_SESSION["pass_login"])){
    echo $_SESSION['name_login'] . "<br>";
    echo $_SESSION['pass_login'];
    echo "<a href='superlogout.php'>Logout</a>";

}else{
    header("location:superlogin.php");
}

?>
