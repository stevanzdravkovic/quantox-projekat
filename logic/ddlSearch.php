<?php
$data = new categories();
$ddlSearch = $data->getAllCategory();
foreach ($ddlSearch as $item)
{
    echo "<option value='".$item['id_category']."'>".$item['category_name']."</option>";
}
