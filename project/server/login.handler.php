<?php
session_start();
require_once('../connection/connect.php');



$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
   
    if (isset($_POST['login'])) {
        

        if (isset($_POST['email'], $_POST['pwd']) && !empty($_POST['email']) && !empty($_POST['pwd'])) {
           
            $email = trim($_POST['email']);
            $password = trim($_POST['pwd']);

            // Validate email
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                
                // Retrieve user data
                $query = "SELECT * FROM users WHERE email = :email ";
                $stmt = $conn->prepare($query);
                $stmt->execute(['email' => $email]);

                if ($stmt->rowCount() > 0) {
                    
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);

                    $password =md5($password);
 
                    if ($password = $user['pwd']) {
                 
                        // unset($user['pwd']); 
                        $_SESSION['user'] = $user;
                        // $_SESSION['id'] = $id;
                       


                        header('Location: ../index.php');
                    } else {
                        
                        $errors[] = "Wrong Email or Password";
                    }
                } else {
                    $errors[] = "Wrong Email or Password";
                }
            } else {
                $errors[] = "Email address is not valid";
            }
        } else {
            $errors[] = "Email and Password are required";
        }
    }
}









 
	