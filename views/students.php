<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h2>Ajouter un étudiant</h2>

<form method="post">
    <label>
        Nom :
        <input type="text" name="prenom" required>
    </label>
    <br><br>

    <label>
        Âge :
        <input type="number" name="age" required>
    </label>
    <br><br>

    <button type="submit">Ajouter</button>
</form>

<hr>


<h1>Liste des étudiants</h1>

<ul>
<?php foreach ($students as $student): ?>
    <li>
        <?= $student['prenom'] ?> (<?= $student['age'] ?> ans)
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>
