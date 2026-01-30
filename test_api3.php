<?php

require_once 'config/config.php';

$url = API_BASE_URL . '/students';
$response = file_get_contents($url);

// Décodage JSON
$students = json_decode($response, true);

echo "<h1>Liste des étudiants</h1>";

foreach ($students as $student) {
    echo $student['prenom'] . " - " . $student['age'] . " ans<br>";
}
