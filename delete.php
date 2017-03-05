<?php
include_once("config.php");
include 'vendor/autoload.php';
$id = $_GET['id'];
$user = new \Classes\User();

if ($user->delete($id)) {
    header('location: '.BASE_URL.'/list.php');
}