<?php
/**
 * Created by PhpStorm.
 * User: Stefan Lazarevic
 * Date: 15/10/2018
 * Time: 16:27
 */
    //Check for submit
    if(filter_has_var(INPUT_POST, 'submit')){
        //Get form data
        $name = $_POST['fullName'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        //Check required fields
        if(!empty($name) && !empty($email) && !empty($message)){
            //Passed
            //Check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                //Failed
                echo '<script>alert("Please use a valid email");</script>';
            } else{
                //Passed
                //Send an email
                $toEmail = 'stefan.lazarevic123@gmail.com';
                $subject = 'Contact request form '.$name;
                $body = '<h2>Contact request</h2> <h4>Name</h4><p>' . $name . '</p> <h4>Email</h4><p>' . $email . '</p> <h4>Message</h4><p>' . $message . '</p>';

                //Email headers
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

                //Additional headers
                $headers .= "From: ".$name."<".$email.">"."\r\n";


                //should be somewhere else
                if(mail($toEmail, $subject, $body, $headers)){
                    //Email sent
                    echo '<script>alert("Your email has been sent");</script>';
                    header("location:..\index.php");
                } else{
                    echo '<script>alert("Your email was not sent");</script>';
                    echo "<script>
                    window.location.href='../php/index.php';
                    </script>";
                }
            }
        }
        else{
            //Failed
            echo "<script>
            alert('Please fill in all fields');
            window.location.href='../php/index.php';
            </script>";
            exit();
        }
    }
