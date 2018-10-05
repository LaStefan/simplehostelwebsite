<?php
/**
 * Created by PhpStorm.
 * User: Stefan Lazarevic
 * Date: 05/10/2018
 * Time: 14:11
 */
include 'db_helper.php';
session_start();
$errors=[]; //this array holds all errors (username,password, etc.)
$fields=[]; //this array stores all the fields without errors


if(isset($POST['submit'])){

    //these variables will hold filed fields and will be used to insert into db

    $email='';
    $password='';
    $phone='';
    $Fname='';
    $Lname='';
    $birthday='';
    $gender='';
    $nationality='';
//check username input
    if(empty($POST["email"]))
    {
        $errors['email']='The email field is required';
    }
    else
    {
        $email=$POST["email"];
        if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
        {
            $errors['email']="Invalid email format.right format is e.g: somebody@abc.abc";
        }
        else
        {
            $fields=['email']=$email;
        }
    }
    //check password input
    if(empty($POST["password"]))
    {
        $errors['password']='The password field is required';
    }
    else
    {
        $password=$POST["password"];
        if(!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/",$password))
        {
            $errors['password']="Invalid format. Must contain at least one number and one uppercase and lowercase letter , and at least 8 or more characters";

        }
        else
        {
            $fields=['password']=$password;
        }
    }

    //check first name
    if(empty($POST["Fname"]))
    {
        $errors['Fname']='The first name field is required';
    }
    else
    {
        $Fname=$POST["Fname"];
        if(!preg_match("/(?=.*[A-Z])/",$Fname))
        {
            $errors['Fname']="Must have one uppercase letter";
        }
        else
        {
            $fields=['Fname']=$Fname;
        }
    }
//checks last name
    if(empty($POST["Lname"]))
    {
        $errors['Lname']='The last name field is required';
    }
    else
    {
        $Lname=$POST["Lname"];
        if(!preg_match("/(?=.*[A-Z])/",$Lname))
        {
            $errors['Lname']="Must have one uppercase letter";
        }
        else
        {
            $fields=['Lname']=$Lname;
        }
    }
    //checks gender

    if(empty($POST["gender"]))
    {
        $errors['gender']='The gender field is required';
    }
    else
    {
        $gender=$POST["gender"];
        if(!preg_match("",$gender))
        {
            $errors['gender'];
        }
        else
        {
            $fields=['gender']=$gender;
        }
    }
    //checks birthday

    if(empty($POST["birthday"]))
    {
        $errors['birthday']='The birthday field is required';
    }
    else
    {
        $birthday=$POST["birthday"];
        if(!preg_match("",$birthday))
        {
            $errors['birthday'];
        }
        else
        {
            $fields=['birthday']=$birthday;
        }
    }
    //check nationality
    if(empty($POST["nationality"]))
    {
        $errors['nationality']='The nationality field is required';
    }
    else
    {
        $nationality=$POST["nationality"];
        if(!preg_match("",$nationality))
        {
            $errors['nationality'];
        }
        else
        {
            $fields=['nationality']=$nationality;
        }
    }
    //check phone
    if(empty($POST["phone"]))
    {
        $errors['phone']='The phone field is required';
    }
    else
    {
        $phone=$POST["phone"];
        if(!preg_match("",$phone))
        {
            $errors['phone']="";
        }
        else
        {
            $fields=['phone']=$phone;
        }
    }


    if(count($errors)===0)
    {
        if(CheckUser($email))
        {
            $errors['email']="This username is already taken";

        }
        if(CheckPassword($password))
        {
            $errors['password']="This password is already taken";
        }

        if(count($errors)===0){
            if(Register($email,$password,$Fname,$Lname,$gender,$nationality,$phone,$birthday)>0)
            {
                header("Location: ../account.php");
            }
            else
            {
                $_SESSION['errors']=$errors;
                $_SESSION['fields']=$fields;
                header("Location: ../reservations.php");
                //print_r("successfully registered"); //for debug purposes
            }
        }else
        {
            $_SESSION['errors']=$errors;
            $_SESSION['fields']=$fields;
            header("Location: ../reservations.php");
        }


    }else
    {
        $errors['submit']='Something went wrong';
        $_SESSION['errors']=$errors;
        header("Location: ../reservations.php");
    }
}