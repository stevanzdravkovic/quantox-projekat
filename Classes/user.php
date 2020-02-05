<?php


class User extends Database
{
    /*
     * Add new user
     */
    public function insert($fields)
    {
        $implodeColumns = implode(',', array_keys($fields));
        $implodePlaceHolders = implode(', :', array_keys($fields));
        $sql = "INSERT INTO users ($implodeColumns) VALUES (:" . $implodePlaceHolders . ")";
        $stmt = $this->connect()->prepare($sql);
        foreach ($fields as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }
        $stmtExec = $stmt->execute();
        if ($stmtExec) {
            header('Location: login.php');
        }
    }

    /*
     * Login
     */
    public function login($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":password", $password);
        $stmt->execute();
        $count = $stmt->rowCount();
        return $count;
    }

    /*
     * Unique e-mail
     */
    public function checkEmail($email)
    {
        $sql = "SELECT email FROM users WHERE email = :email ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        return $count = $stmt->rowCount();
    }

    /*
     * Search
     */
    public function search($name_user, $category)
    {
        $sql = "SELECT * FROM users INNER JOIN categories ON users.category_id = categories.id_category 
                WHERE users.name_user=:name_user AND (categories.id_category=:id_category OR categories.parent=:id_category 
                OR categories.id_category IN ((SELECT c2.id_category FROM categories c INNER JOIN categories c2 ON c.id_category=c2.parent 
                WHERE c.parent=:id_category)))";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(":name_user", $name_user);
        $stmt->bindValue(":id_category", $category);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}