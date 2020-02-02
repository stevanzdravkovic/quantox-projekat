<?php
session_start();
if(isset($_SESSION['mail']))
{
    echo "<h3>Welcome, your email is:".$_SESSION['mail']."</h3>";
    echo "<a href='logout.php'>Logout</a>";
}
else
{
    header("Location: index.php");
}
