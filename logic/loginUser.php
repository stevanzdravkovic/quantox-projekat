<?php
session_start();
function __autoload($class)
{
    require_once "Classes/$class.php";
}
if (isset($_REQUEST['submit']))
{
    $mail = $_REQUEST['mail'];
    $password = $_REQUEST['pass'];
    $log = new user();
    $result = $log->login($mail, md5($password));
}