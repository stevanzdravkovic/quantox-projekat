<?php
function __autoload($class)
{
    require_once "Classes/$class.php";
}
@$idCategory = $_POST['id'];
$categories = new categories();
$result = $categories->getCategory($idCategory);
$html = '<option value = "0" selected disabled> Select category</option>';
foreach ($result as $r)
{
    $html.= '<option value='.$r['id_category'].'>'.$r['category_name'].'</option>';
}
echo $html;

