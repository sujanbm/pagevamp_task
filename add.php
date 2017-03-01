<?php

include 'vendor/autoload.php';

$email = $_POST['email'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];

$user = new \Classes\User();
$user->setFirstName($firstName);
$user->setEmail($email);
$user->setLastName($lastName);
if ($user->insert()) {
    header('location:list.php');
}
