<?php

if (isset($_REQUEST['submit'])) {
    $mail = $_REQUEST['mail'];
    $password = $_REQUEST['pass'];
    if (empty($mail) || empty($password)) {
        $message = "<label>All fields are required</label>";
    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $message = "<label>Invalid email format </label>";
    } else {
        $log = new User();
        $result = $log->login($mail, md5($password));
        if ($result > 0) {
            $_SESSION['mail'] = $mail;
            header("Location:dashboard.php");
        } else {
            $message = '<label>Wrong data </label>';
        }
    }
}