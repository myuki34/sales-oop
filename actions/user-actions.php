<?php

    include "../classes/User.php";

    $user = new User;

    if(isset($_POST['register'])){
        echo "test";
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user->createUser($first_name, $last_name, $username, $password);
    }



?>