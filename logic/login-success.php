<?php
if (isset($_SESSION['mail'])) {
    $tree = new categories();
    $items = $tree->getAllCategory();
    echo "<ul class='nav nabar-nav navbar-right'>";
    function categoryTree($items, $parenId)
    {
        echo "<ul>";
        foreach ($items as $item) {
            if ($item['parent'] == $parenId) {
                echo "<li class='collapse ' id='" . categories::getParentCategory($parenId) . "'>
<button class='btn btn-primary' data-toggle='collapse' data-target='#" . $item['category_name'] . "' aria-expanded='false'>" . $item['category_name'] . ' - ' . categories::countUsersByCategory($item['id_category']) . "</button>";
                categoryTree($items, $item['id_category']);
                echo "</li>";
            }
        }
        echo "</ul>";
    }

    foreach ($items as $item) {
        if ($item['parent'] == 0) {
            echo "<li><button class='btn btn-primary' data-toggle='collapse' data-target='#" . categories::getParentCategory($item['id_category']) . "' aria-expanded='false'>" . $item['category_name'] . "</button>";
            categoryTree($items, $item['id_category']);
            echo "</li>";
        }
    }
    echo "</ul>";

} else {
    header("Location: index.php");
}