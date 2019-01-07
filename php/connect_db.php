<?php 
require_once 'rb-mysql.php';
session_start();
R::setup( 'mysql:host=localhost;dbname=detsad_bd', 'mysql', 'mysql' );