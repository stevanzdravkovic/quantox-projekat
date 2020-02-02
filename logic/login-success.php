<?php
session_start();
function __autoload($class)
{
    require_once "Classes/$class.php";
}
if(isset($_SESSION['mail']))
{
    echo "<h3>Welcome, your email is:".$_SESSION['mail']."</h3>";
    echo "<a href='logout.php'>Logout</a> <br/>";
}
else
{
    header("Location: index.php");
}


