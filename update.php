<?php
include_once("config.php");
include 'vendor/autoload.php';
if(isset($_POST['id'])){
	$id = $_POST['id'];
}
if(isset($_POST['email']) && (trim($_POST['email']) != '') ) {
    $email=$_POST['email'];
}
else{
	echo "Email is required";
	exit();
}
if(isset($_POST['first_name']) && (trim($_POST['first_name']) != '') ) {
    $firstName=$_POST['first_name'];
}
else{
	echo "First Name is required";
	exit();
}
if(isset($_POST['last_name']) && (trim($_POST['last_name']) != '') ) {
    $lastName=$_POST['last_name'];
}
else{
	echo "Last Name is required";
	exit();
}
if(isset($_POST['message']) && (trim($_POST['message']) != '') ) {
    $message=$_POST['message'];
}
else{
	echo "Message is required";
	exit();
}
$user = new \Classes\User();
$user->setId($id);
$user->setFirstName($firstName);
$user->setEmail($email);
$user->setLastName($lastName);
$user->setMessage($message);
if ($user->update($id)) {
    header('location: '.BASE_URL.'/list.php');
}
