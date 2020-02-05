<?php


class Categories extends Database
{
    /*
   *  Get all categories by parentId
  */
    public function getCategory($parentId)
    {
        $sql = "SELECT distinct * FROM categories WHERE parent=:id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(":id", $parentId);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    /*
    *  Count users by category
   */
    public static function countUsersByCategory($categoryId)
    {
        $sql = 'SELECT COUNT(users.id_users) as users FROM users INNER JOIN categories on users.category_id = categories.id_category WHERE categories.id_category = :id';
        $database = new Database();
        $executeQuery = $database->connect()->prepare($sql);
        $executeQuery->bindParam(':id', $categoryId);
        $executeQuery->execute();
        $results = $executeQuery->fetch(PDO::FETCH_ASSOC);
        $users = $results['users'];
        return $users;
    }

    /*
     * Get all categories
     */
    public function getAllCategory()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $id = '';
        $items = $result;
        return $items;
    }

    /*
     *  Get category name by id
     */
    public static function getParentCategory($id)
    {
        $sqlParentName = "SELECT category_name FROM categories WHERE id_category=:id";
        $database = new Database();
        $stmtParent = $database->connect()->prepare($sqlParentName);
        $stmtParent->bindValue(":id", $id);
        $stmtParent->execute();
        $resultParent = $stmtParent->fetchColumn();

        return $resultParent;
    }
}