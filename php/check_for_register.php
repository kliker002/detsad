<?
require_once "connect_db.php";
session_start();
if ($_POST['email'] != "" && $_POST['pass'] != "") {
	if (R::findOne('users',"email = ?", array($_POST['array']))) {
		
		$user = R::dispense('users');
		$user->email = $_POST['email'];
		$user->password = $_POST['pass'];
		$user->ismember = 0;
		R::store($user);
		header('Location: http://detsad.com/ ');
	}

}
