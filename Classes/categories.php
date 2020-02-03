<?php


class categories extends db
{
    public function getCategory($parentId)
    {
        $sql= "SELECT distinct * FROM categories WHERE parent=:id";
        $stmt=$this->connect()->prepare($sql);
        $stmt->bindValue(":id",$parentId);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function countUsersByCategory($categoryId)
    {
        $sql = 'SELECT COUNT(users.id_users) as users FROM users INNER JOIN categories on users.category_id = categories.id_category WHERe categories.id_category = :id';
        $database = new db();
        $executeQuery  = $database->connect()->prepare($sql);
        $executeQuery->bindParam(':id',$categoryId);
        $executeQuery->execute();
        $results = $executeQuery->fetch(PDO::FETCH_ASSOC);

        $users = $results['users'] ;

        return $users;
    }

    public function getAllCategory()
    {
        $sql = "SELECT * FROM categories";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $id='';
        $items= $result;

        echo "<ul>";
        function sub($items, $id)
        {
            echo "<ul>";
            foreach ($items as $item)
            {
                if($item['parent'] == $id)
                {
                    echo "<li>". $item['category_name']. ' - ' .categories::countUsersByCategory($item['id_category']);
                    sub($items, $item['id_category']);
                    echo "</li>";
                }
            }
            echo "</ul>";
        }
        foreach ($items as $item)
        {
            if($item['parent'] == 0)
            {
                echo"<li>" .$item['category_name'];
                $id = $item['id_category'];
                sub($items, $id);
                echo "</li>";
            }
        }
        echo "</ul>";
    }
}