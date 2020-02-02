<?php
function __autoload($class)
{
    require_once "Classes/$class.php";
}
if (isset($_REQUEST['submit']))
{
    $name = $_REQUEST['name'];
    $mail = $_REQUEST['mail'];
    $password = $_REQUEST['pass'];
    $rpass = $_REQUEST['Rpass'];
    @$catID = $_REQUEST['category'];
        $fields = [
            'name_user'=> $name,
            'email'=> $mail,
            'password'=> md5($password),
            'category_id' => $catID
        ];
        $employee = new user();
        $employee->insert($fields);
}
