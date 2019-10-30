<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <title>Ma liste de monstres</title>
</head>

<body>
<div class="container">
<h2>Voici mes monstres :</h2>
    <div class="row">
<?php
require_once 'connec.php';
$pdo = new \PDO(DSN, USER, PASS);

$query = "SELECT * FROM Monsters";
$statement = $pdo->query($query);
$monsters = $statement->fetchAll();
foreach ($monsters AS $monster) {
    echo '<div class="col-6">';
    echo '<img src="'. $monster['picture'] .'">';
    echo '</div><div class="col-6">';
    echo $monster['name'];
    echo '</div>';
}
echo '</ul>';
?>
    </div>
</div>
</body>
</html>
