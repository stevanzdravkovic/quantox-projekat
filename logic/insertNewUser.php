<?php

if (isset($_REQUEST['submit']))
{
    $name = $_REQUEST['name'];
    $re_name = "/^([a-zA-Z' ]+)$/";
    $mail = $_REQUEST['mail'];
    $password = $_REQUEST['pass'];
    $re_pass = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";
    $rpass = $_REQUEST['Rpass'];
    @$catID = $_REQUEST['category'];
    if( empty($name) || empty($mail) || empty($password) || empty($catID))
    {
        $message = "<label>All fields are required</label>";
    }
    elseif($password != $rpass)
    {
        $message = "<label>Password does not match</label>";
    }
    elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL))
    {
        $message = "<label>Invalid email format </label>";
    }
    elseif(!preg_match($re_name,$name))
    {
        $message = "<label>Invalid name format </label>";
    }
    elseif(!preg_match($re_pass,$password))
    {
        $message = "<label>Invalid password format </label>";
    }
    else{
        $fields = [
            'name_user'=> $name,
            'email'=> $mail,
            'password'=> md5($password),
            'category_id' => $catID
        ];
        $register = new user();
        if($register->checkEmail($mail)>0)
        {
            $message = '<label>mail already exist </label>';
        }
        else {
            $register->insert($fields);
        }

    }

}
