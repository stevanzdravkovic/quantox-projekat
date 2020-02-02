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
}