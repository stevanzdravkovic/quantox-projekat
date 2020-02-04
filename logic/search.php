<?php

if(isset($_REQUEST['btnSearch']))
{
    if(isset($_SESSION['mail']))
    {
        $name = $_REQUEST['tbSearch'];
        $ddl = $_REQUEST['ddlSearch'];

        $search = new user();
        $items = $search->search($name, $ddl);
        if($items != null)
        {
            foreach ($items as $item)
            {
                echo "User: <b>".$item['name_user']. "</b> with email address: <b>" .$item['email']."  </b>learn: (<b>".$item['category_name']."</b>)</br></br>";
            }
        }
        else{
            echo "Za datu kategoriju ne postoji korisnik sa tim imenom";
        }
    }
    else
        {
        include ('components/loginForm.php');
    }


}

