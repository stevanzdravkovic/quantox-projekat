<?php


class employee extends db
{
    //select all date from the database
    public function select()
    {
        $sql="SELECT * FROM employees";
        $result=$this->connect()->query($sql);

        if($result->rowCount()>0)
        {
            while($row=$result->fetch())
            {
                $data[] = $row;
            }
            return $data;
        }
    }

    /*public function insert($fields)
    {
        $implodeColumns = implode (',', array_keys($fields));
        $implodePlaceHolders= implode (', :', array_keys($fields));
        $sql="INSERT INTO employees ($implodeColumns) VALUES (:".$implodePlaceHolders.")";
        $stmt= $this->connect()->prepare($sql);
        foreach ($fields as $key =>$value)
        {
            $stmt->bindValue(':'.$key,$value);

        }
        $stmtExec= $stmt->execute();

        if($stmtExec)
        {
            header('Location: index.php');
        }
    }*/

    public function selectOne($id)
    {
        $sql= "SELECT * FROM employees WHERE id=:id";
        $stmt=$this->connect()->prepare($sql);
        $stmt->bindValue(":id",$id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($fields, $id)
    {
        //$sql="UPDATE employees SET name=:name, city=:city, designation=:designation WHERE id=:id"
        $st="";
        $counter=1;
        $total_fields=count($fields);
        foreach ($fields as $key =>$value)
        {
            if($counter===$total_fields)
            {
                $set = "$key=:".$key;

                $st=$st.$set;
            }
            else
            {
                $set="$key=:".$key.",";
                $st=$st.$set;
                $counter++;
            }
        }
        $sql="";
        $sql.="UPDATE employees SET ".$st;

        $sql.=" WHERE id=".$id;

        $stmt=$this->connect()->prepare($sql);
        foreach ($fields as $key =>$value)
        {
            $stmt->bindValue(":".$key,$value);
        }

        $stmtExec=$stmt->execute();

        if($stmtExec)
        {
             header('Location:index.php');
        }

    }
    /*public function update($id,$name,$city,$designation)
    {
        $sql="UPDATE employees SET name='$name', city='$city', designation='$designation' WHERE id='$id'";
        $result=$this->connect()->query($sql);
        if($result)
        {
            header('location:index.php');
        }
    }*/

 /*  public function update($fields,$id)
    {
        $st="";
        $counter=1;
        $total_fields = count($fields);
        foreach ($fields as $key => $value)
        {
            if($counter===$total_fields)
            {
                $set="$key= :".$key;
                $st=$st.$set;
            }
            else
            {
                $set="$key= :".$key.", ";
                $st=$st.$set;
                $counter++;
            }
        }

        $sql="";
        $sql.="UPDATE employees SET ".$st;
        $sql.="WHERE id=".$id;

        $stmt=$this->connect()->prepare($sql);

        foreach ($fields as $key => $value)
        {
            $stmt->bindValue(':'.$key,$value);
            $stmtExec=$stmt->execute();

            if($stmtExec)
            {
                header('Location: index.php');
            }
        }
    }
*/
    public function delete($id)
    {
        $sql="DELETE FROM employees WHERE id=:id";
        //  $result=$this->connect()->query($sql);
        $stmt=$this->connect()->prepare($sql);
        $stmt->bindValue(":id", $id);
        $result=$stmt->execute();
        if($result)
        {
            header('location:index.php');
        }
    }
}