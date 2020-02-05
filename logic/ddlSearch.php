<?php
$data = new Categories();
$ddlSearch = $data->getAllCategory();
foreach ($ddlSearch as $item) {
    echo "<option value='" . $item['id_category'] . "'>" . $item['category_name'] . "</option>";
}
