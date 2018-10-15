<?php

include('registerAction.php');


function Register($email,$password,$Fname,$Lname,$gender,$nationality,$phone,$birthday)
{

    try{
        $db=DB();
        $enc_password=hash('sha256', $password);




        $query=$db->prepare("INSERT INTO user(email,Fname,Lname,password,phone,gender,nationality,birthday)VALUES(:email,:Fname,:Lname,:enc_password,:phone,:gender,:nationality,:birthday)");
        $query->bindParam("email",$email,PDO::PARAM_STR_CHAR);
        $query->bindParam("firstname",$Fname,PDO::PARAM_STR_CHAR);
        $query->bindParam("lastname",$Lname,PDO::PARAM_STR_CHAR);
        $query->bindParam("gender",$gender,PDO::PARAM_STR_CHAR);
        $query->bindParam("nationality",$nationality,PDO::PARAM_STR);
        $query->bindParam("birthday",$birthday,PDO::PARAM_STR_CHAR);
        $query->bindParam("password",$password,PDO::PARAM_STR_CHAR);
        $query->bindParam("phone",$phone,PDO::PARAM_INT);
return $query;


    }catch(PDOException $e)
        {
            exit($e->getMessage());

        }

}

function CheckUser($email)
{
    try{
        $db=DB();
        var_dump($db);
        $query=$db->prepare("SELECT id FROM user WHERE email=:email");
        $query->bindParam("email",$email,PDO::PARAM_STR_CHAR);
        $query->execute();
        if($query->rowCount()>0)
        {
            return true;
        }
        else
        {
            return false;
        }

    }catch(PDOException $e)
    {
        exit($e->getMessage());
    }
}

function CheckPassword($password)
{
    try{
        $db=DB();
        $enc_password=hash('sha256',$password);
        $query=$db->prepare("SELECT id FROM customer WHERE password=:password");
        $query->bindParam("password",$enc_password,PDO::PARAM_STR_CHAR);
        $query->execute();
        if($query->rowCount()>0)
        {
            return true;
        }
        else{
            return false;
            }
    }catch(PDOException $e)
    {
        exit($e->getMessage());
    }
}
function Login($username,$password)
{
    try{
        $db=DB();
        $enc_password=hash('sha256',$password);
        $query=$db->prepare("SELECT id FROM customer WHERE email=:username AND password=:password");
        $query->bindParam(":username",$username,PDO::PARAM_STR_CHAR);
        $query->bindParam("password",$enc_password,PDO:: PARAM_STR_CHAR);

        $query->execute();
        if($query->rowCount()>0)
        {   $result=$query->fetch(PDO::FETCH_OBJ);
        return $result->id;
        }
        else
        {
            return false;
        }
    }catch(PDOException $ex)
    {
        exit($ex->getMessage());
    }

}

