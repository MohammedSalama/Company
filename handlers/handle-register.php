<?php
include("../database/db-connect.php");
session_start();
$errors = array();
//check if user pressed
if(isset($_POST['register']))
{

    //mysqli_real_escape_string($connection,string);
    $name = mysqli_real_escape_string($connection , htmlspecialchars(trim($_POST['full_name'])));
    $email = mysqli_real_escape_string($connection , htmlspecialchars(trim($_POST['email'])));
    $password = trim($_POST['password']);
    echo $name;

    //validation

    //Validate NAME
    if(empty($name))
    {
        $errors[] = 'Name is required';
    }
    elseif(! is_string($name))
    {
        $errors[] = "Name must be string";
    }
    elseif(strlen($name) < 3 )
    {
        $errors[] = "Name must be more than 2 characters";

    }
    elseif(strlen($name) > 50)
    {
        $errors[] = "Name must be less than 51 characters";

    }

    //Emaail
    if(empty($email))
    {
        $errors[] = "Email is required";
    }
    elseif(! filter_var($email , FILTER_VALIDATE_EMAIL))
    {
        $ERRORS[] = "Email is not valid , Please enter a valid email";
    }
    //password
    if (empty($password))
    {
        $errors[] = "password is required";
    }
    elseif(strlen($password) < 8)
    {
        $errors[] = "password must be greater than 7";
    }
    elseif(strlen($password) > 50)
    {
        $errors[] = "Password must be less than 51";
    }
    if (empty($errors))
    {
        $sql = "INSERT INTO users(`name` , `email` , `password`) 
        VALUES 
        ('$name' , '$email' , '$password')";
        echo $sql;
        $result = mysqli_query($connection , $sql);
        if ($result)
        {
            //SESSION['user_id'] = 
            $sql = "SELECT id , name FROM users WHERE email = $email";
            $result = mysqli_query($connection , $sql);
            $data = mysqli_fetch_assoc($resullt);
            $_SESSION['user_id'] = $data['id'];
            $_SESSION['user_name'] = $data['name'];
            $_SESSION['user_id'] = $data['id'];
            $_SESSION['user_id'] = $data['id'];
            header("location:../index.php");
            //$showData = ($data);
 
        }
        else
        {
            $_SESSION['errors'] = $errors;
            header("location:../register.php");
        }
    }
}

?>