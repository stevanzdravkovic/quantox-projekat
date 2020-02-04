<?php
if (isset($_SESSION['mail'])) {
    $tree = new categories();
    $items = $tree->getAllCategory();
    echo "<ul class='nav nabar-nav navbar-right'>";
    function sub($items, $id)
    {
        echo "<ul>";
        foreach ($items as $item) {
            if ($item['parent'] == $id) {
                echo "<li>" . $item['category_name'] . ' - ' . categories::countUsersByCategory($item['id_category']);
                sub($items, $item['id_category']);
                echo "</li>";
            }
        }
        echo "</ul>";
    }

    foreach ($items as $item) {
        if ($item['parent'] == 0) {
            echo "<li >" . $item['category_name'];
            $id = $item['id_category'];
            sub($items, $id);
            echo "</li>";
        }
    }
    echo "</ul>";
} else {
    header("Location: index.php");
}


