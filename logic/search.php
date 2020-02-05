<?php

if (isset($_REQUEST['btnSearch'])) {
    if (isset($_SESSION['mail'])) {
        $name = $_REQUEST['tbSearch'];
        $re_name = "/^([a-zA-Z' ]+)$/";
        @$ddl = $_REQUEST['ddlSearch'];
        if (empty($name) || empty($ddl)) {
            echo "<label class='text-danger'>All fields are required</label>";
        } elseif (!preg_match($re_name, $name)) {
            echo "<label class='text-danger'>Invalid name format </label>";
        } else {
            $search = new User();
            $items = $search->search($name, $ddl);
            if ($items != null) {
                foreach ($items as $item) {
                    echo "<label class='text-primary'>User: <b>" . $item['name_user'] . "</b> with email address: <b>" . $item['email'] . "  </b>learn: (<b>" . $item['category_name'] . "</b>)</br></br></label>";
                }
            } else {
                echo "<label class='text-danger'>Za datu kategoriju ne postoji korisnik sa tim imenom</label>";
            }
        }
    } else {
        include('components/loginForm.php');
    }
}
