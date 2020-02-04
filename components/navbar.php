<?php
session_start();
function __autoload($class)
{
    require_once "Classes/$class.php";
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">quantox</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"  name="tbSearch">
            <label for="sel1">Select category: </label>
            <select class="form-control" id="sel1" name="ddlSearch">
                <option value = "0" selected disabled> Select category</option>
                <?php include 'logic/ddlSearch.php'?>
            </select>
            <button class="btn btn-outline-success my-2 my-sm-0" name="btnSearch" type="submit">Search</button>
        </form>
    </div>
</nav>