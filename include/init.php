<?php 
// ----- connection bdd
$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT => 'SET NAMES utf8'));

session_start();

$content ='';
$error ='';

