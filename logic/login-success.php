<?php
if (isset($_SESSION['mail'])) {
    $tree = new categories();
    $items = $tree->getAllCategory();
    echo "<ul class='nav nabar-nav navbar-right'>";
    function sub($items, $parenId)
    {
        echo "<ul>";
        foreach ($items as $item) {
            if ($item['parent'] == $parenId) {
                echo "<li class='collapse ' id='".categories::getParentCategory($parenId)."'>
<button class='btn btn-primary' data-toggle='collapse' data-target='#".$item['category_name']."' aria-expanded='false'>" . $item['category_name'] . ' - ' . categories::countUsersByCategory($item['id_category'])."</button>";
                sub($items, $item['id_category']);
                echo "</li>";
            }
        }
        echo "</ul>";
    }

    foreach ($items as $item) {
        if ($item['parent'] == 0) {
            echo "<li><button class='btn btn-primary' data-toggle='collapse' data-target='.multiple' aria-expanded='false'>".$item['category_name']."</button>";
            $id = $item['id_category'];
            echo "</li>";
        }
    }
    foreach ($items as $item) {
        if ($item['parent'] == 1) {
            echo "<li class='collapse multiple w-100'>
<button class='btn btn-primary' data-toggle='collapse' data-target='#".$item['category_name']."' aria-expanded='false'>" . $item['category_name'] . ' - ' . categories::countUsersByCategory($item['id_category'])."</button>";
            $id = $item['id_category'];
            sub($items, $id);
            echo "</li>";
        }
    }
    echo "</ul>";



} else {
    header("Location: index.php");
}