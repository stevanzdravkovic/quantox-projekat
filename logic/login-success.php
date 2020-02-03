<?php
function __autoload($class)
{
    require_once "Classes/$class.php";
}
if(isset($_SESSION['mail']))
{
    echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
    echo"<h3>Welcome, your email is: " .$_SESSION['mail']."</h3>";
    echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"></li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <label for="sel1">Select category: </label>
                <select class="form-control" id="sel1">
                    <option value="">backend</option>
                    <option value="">frontend</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <a class="nav-link" href="logout.php"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button> <span class="sr-only">(current)</span></a>
    </div>
</nav>';
    $a = new categories();
    $a->getAllCategory();
}
else
{
    header("Location: index.php");
}


