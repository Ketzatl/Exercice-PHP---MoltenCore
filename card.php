<?php
    require ('tableau.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">

    <title>Fiche BOSS</title>
</head>

<body>

<?php for ($i = 0; $i <= 9; $i++) { ?>

    <div id="container" class="card bg-dark" style="width: 18rem;">
        <img class="card-img-top" style="height: 200px" src="<?= $boss[$i]['image'] ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $boss[$i]['name']?> </h5>

            <p class="card-text text-white">Description :</p>
        </div>
        <ul  class="list-group list-group-flush">
            <li class="list-group-item text-dark"><?= $boss[$i]['nom'] ?></li>
            <li class="list-group-item text-dark"><?= $boss[$i]['description'] ?></li>
            <li class="list-group-item text-dark"><?= $boss[$i]['santé'] ?></li>
            <li class="list-group-item text-dark"><?= $boss[$i]['mana'] ?></li>
            <li class="list-group-item text-dark"><?= $boss[$i]['butin '] ?></li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Vers wiki Boss</a>
            <a href="#" class="card-link">vers Molten Core</a>
        </div>
</div>

<?php } ?>

</body>
</html>
