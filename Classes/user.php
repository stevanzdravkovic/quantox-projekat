<?php


class user extends db
{
    #add new user
    public function insert($fields)
    {
        $implodeColumns = implode (',', array_keys($fields));
        $implodePlaceHolders= implode (', :', array_keys($fields));
        $sql="INSERT INTO users ($implodeColumns) VALUES (:".$implodePlaceHolders.")";
        $stmt= $this->connect()->prepare($sql);
        foreach ($fields as $key =>$value)
        {
            $stmt->bindValue(':'.$key,$value);
        }
        $stmtExec= $stmt->execute();
        if($stmtExec)
        {
            header('Location: login.php');
        }
    }
    #login
    public function login($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(
            array(
                'email' => $email,
                'password' => $password
            )
        );
        $count = $stmt->rowCount();
        if($count > 0)
        {
            $_SESSION['mail'] = $email;
            header("Location:dashboard.php");
        }
        else
        {
            $message = '<label>Wrong data </label>';
        }
    }
    #unique mail
    public function checkEmail($email)
    {
        $sql = "SELECT email FROM users WHERE email = :email ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(
            array(
                'email' => $email
            )
        );
        return $count = $stmt->rowCount();
    }
}