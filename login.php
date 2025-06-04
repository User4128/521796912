<?php
session_start();

$users = array(
    "admin" => "admin",
	"admin" => "admin"


); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $users) && $users[$username] === $password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        
        header("Location: dashboard.php");
        exit;    } else {
        echo "chuj ci w pizde.";
    }
} else {
    header("Location: index.php");
    exit; 
}
?>


