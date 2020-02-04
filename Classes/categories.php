<?php


class categories extends db
{
    public function getCategory($parentId)
    {
        $sql = "SELECT distinct * FROM categories WHERE parent=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(":id",$parentId);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function countUsersByCategory($categoryId)
    {
        $sql = 'SELECT COUNT(users.id_users) as users FROM users INNER JOIN categories on users.category_id = categories.id_category WHERe categories.id_category = :id';
        $database = new db();
        $executeQuery = $database->connect()->prepare($sql);
        $executeQuery->bindParam(':id',$categoryId);
        $executeQuery->execute();
        $results = $executeQuery->fetch(PDO::FETCH_ASSOC);

        $users = $results['users'] ;

        return $users;
    }

    public function getAllCategory()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $id='';
        $items = $result;
        return $items;
    }
}