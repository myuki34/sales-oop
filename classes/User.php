<?php

    require "Database.php";

    class User extends Database {
        
        public function createUser($first_name, $last_name, $username, $password){
            $sql = "INSERT INTO `users`(`first_name`, `lasst_name`, `username`, `password`) VALUES('$first_name', '$last_name', '$username', '$password')";
            if($this->conn->query($sql)){
                header("location: ../views"); //index.php
                exit;
            } else {
                die("Error creating user: " . $this->conn->error);
            }
        }

        public function login($username, $password){
            $sql = "SELECT * FROM users WHERE username = '$username'";
    
            if ($result = $this->conn->query($sql)){
                if ($result->num_rows == 1){
                    $user_details = $result->fetch_assoc();
    
                    if (password_verify($password, $user_details['password'])){
                        session_start();
                        $_SESSION['user_id'] = $user_details['id'];
                        $_SESSION['username'] = $user_details['username'];
    
                        header("location: ../views/dashboard.php");
                        exit;
                    } else {
                        die("Password is incorect.");
                    }
                } else {
                    die("Username is incorect.");
                }
            } else {
                die("Error in logging in: " .$this->conn->error);
            }
        }


    }


?>