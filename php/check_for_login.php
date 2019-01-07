<?php
ob_start();
require_once "connect_db.php";
session_start();
$user = R::findOne('users', 'email = ? and password = ?', array($_POST['email'], $_POST['pass']));
if ($user) {
	echo "USER:" . $user->email;
	$_SESSION['logged'] = $user;
	header('Location: http://detsad.com/ ');
}
else echo "POST: " . $_POST['email'];
