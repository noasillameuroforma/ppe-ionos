<?php
$env = parse_ini_file(__DIR__ . '/../.env');

$server = $env['DB_HOST'] ?? '';
$user   = $env['DB_USER'] ?? '';
$db     = $env['DB_NAME'] ?? '';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accès BDD</title>
</head>
<body>
    <h1>Connexion à la base de données</h1>

    <p>Utilise ces informations dans Adminer :</p>

    <ul>
        <li><strong>Système :</strong> MySQL</li>
        <li><strong>Serveur :</strong> <?= htmlspecialchars($server) ?></li>
        <li><strong>Utilisateur :</strong> <?= htmlspecialchars($user) ?></li>
        <li><strong>Base :</strong> <?= htmlspecialchars($db) ?></li>
        <li><strong>Mot de passe :</strong> celui fourni par le professeur</li>
    </ul>

    <p>
        <a href="adminer.php">Ouvrir Adminer</a>
    </p>
</body>
</html>