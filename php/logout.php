<?
ob_start();
session_start();
$_SESSION['logged'] =  null;
header('Location: http://detsad.com/ ');