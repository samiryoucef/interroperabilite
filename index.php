<?php

require_once 'config/config.php';
require_once 'services/StudentService.php';

/* Gestion du POST */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];

    StudentService::addStudent($prenom, $age);

    // Redirection anti-doublon (PRG pattern)
    header('Location: index.php');
    exit;
}

/* Récupération des données */
$students = StudentService::getAllStudents();

/* Affichage */
require_once 'views/students.php';

