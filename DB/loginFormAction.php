<?php
session_start();
try {
    $conn = new PDO('mysql:host=studmysql01.fhict.local;dbname=dbi396268', 'dbi396268', '12345678');
// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connection successfully done!";
}catch(PDOException $e)
{
    echo "Connection failed!". $e->getMessage();
}

if (isset($_POST['submit'])){ //echo "<script> alert('Logged in!');</script>" ;
    if ($_POST['username'] != "" || $_POST['psw'] != ""){
        try{

            $sqlGetStatement = "SELECT id FROM customer WHERE email = :email AND password = :password";
            $stmt = $conn->prepare($sqlGetStatement);
            $inputEmail = $_POST['username'];
            $inputPassword = $_POST['psw'];
            $result = $stmt -> execute(['email' => $inputEmail, 'password' => $inputPassword]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0){

                if(isset($_SESSION['email']))
                {
                    $_SESSION['email']=$row['email'];
                }

                if(isset($_SESSION['password']))
                {
                    $_SESSION['password'] = $row['password'];
                }
                $_SESSION['login']= "OK";
                echo "<script>
                    alert('Logged in! Welcome back dear customer!');
                    window.location.href='../php/reservations.php';
                    </script>";
            }
            else{
                echo "<script>
                        alert('No combination of that email and password exist. Did you make a mistake? If you do not have an account yet, sign up!');
                        
                        </script>";
            }
        }
        catch (PDOException $e){
            echo "<script>
                        alert('Database error');
                        
                        </script>";
        }
        finally{
            $conn = null;
        }
    }
    else{
        echo "<script>
                        alert('Please fill in all fields');
                        
                        </script>";
    }
}