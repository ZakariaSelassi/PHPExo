<?php
    include 'autoload.php';

    $user = new User();

    if(isset($_POST['submit'])){
        print_r($_POST);
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user->createUsers($username,$email,$password);
    }