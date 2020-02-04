<?php
session_start();
function __autoload($class)
{
    require_once "Classes/$class.php";
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8"/>
    <title>quantox</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h3>Welcome, your email is: <?php echo $_SESSION['mail']?></h3><div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            </li>
        </ul>
        <?php include('components/searchForm.php') ?>
        <a class="nav-link" href="logout.php"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button> <span class="sr-only">(current)</span></a>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col">
            <?php include('logic/login-success.php') ?>
        </div>
        <div class="col">
            <?php include ('logic/search.php')?>
        </div>
    </div>
<div>
</body>
</html>