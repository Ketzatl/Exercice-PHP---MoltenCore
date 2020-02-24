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
    <link rel="stylesheet" href="default.css">

    <title>Boss Molten Core</title>
</head>
<body>



    <h1>Les BOSS du Coeur de Magma (MoltenCore)</h1>

    <div id="container">

        <div  class="elements" class="div1" class="card" style="width:44vw">

            <img class="card-img-top" src="https://gamepedia.cursecdn.com/wowpedia/d/d0/MoltenCore.JPG?version=ba08a8fc67f9a6dd40e55d106c352d84" alt="Coeur de Magma image" >
            <div class="card-body">
                <h4 class="card-title">Coeur de Magma (MoltenCore)</h4>
                <p class="card-text">Le Coeur du Magma a été crée durant la Guerre des Trois Marteaux, il y a plus de 300 ans. Vers la fin de la guerre, le Thane-Sorcier Thaurissan, le dirigeant des nains Sombrefer, essaya d'invoquer un puissant élémentaire de feu pour vaincre les forces des clans Barbe-de-Bronze et Marteaux-Hardis. Il a mieux réussi que ce qu'il avait imaginé et a libéré Ragnaros, le Seigneur du Feu, de ses millénaires de captivité sous les Carmines.
                    Ragnaros détruit la ville de Thaurissan et créa le volcan du Mont Rochenoire. Il reste encore ici avec ses serviteurs élémentaire et les esclaves restant du clan Sombrefer. Le lac brûlant où Ragnaros se repose agit comme une faille connectée au plan élémentaire du feu, ce qui permet le passage d'élémentaires malicieux.</p>
                <a href="https://wow-fr.gamepedia.com/C%C5%93ur_du_Magma" class="btn btn-primary">Lien vers gamepedia</a>
            </div>

        </div>

        <div  class="elements" class="div1" class="card" style="width:44vw">

            <img class="card-img-top" src="https://gamepedia.cursecdn.com/wowpedia/e/e5/WorldMap-MoltenCore.jpg?version=3fc57a13d78d835e76ed08f7a2d6c9d6" alt="Coeur de Magma image" >
            <div class="card-body">
                <h4 class="card-title">Coeur de Magma (MoltenCore)</h4>
                <p class="card-text">Le Coeur du Magma est composé de roches et de lave, organisée en rivières, lacs et "chutes de lave". On trouve également des ouvertures ressemblant à des petits volcans, des fissures dans les mûrs et les plafonds, des dépôts occasionnels de sombre fer et des runes d'observation. La plupart des endroits n'ont pas de noms spécifiques, ainsi la majorité du donjon est appelé "Le Coeur du Magma".
                    <br>Il y a trois entrées possibles pour le donjon :<br>
                <ol class="ol1">
                    <li>    En complétant l'Harmonisation avec le Coeur et y être ensuite emmené en parlant à Lothos Ouvrefaille puis en sautant à travers la fenêtre à côté de lui ou en sautant dans la lave à côté de lui.</li>
                    <li>    En pénétrant dans le portail dans les Profondeurs Rochenoire.</li>
                    <li>    Grâce à un démoniste et son rituel d'invocation.</p></li>
                </ol>
                <a href="https://wow-fr.gamepedia.com/C%C5%93ur_du_Magma" class="btn btn-primary">Lien vers gamepedia</a>
            </div>

        </div>




    </div>

<table class="table table-hover table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Photo</th>
        <th scope="col">HP</th>
        <th scope="col">Mana</th>
        <th scope="col">vers Profil</th>
    </tr>
    </thead>
    <tbody>

    <?php for ($i = 0; $i <= 10; $i++) { ?>

    <tr>
        <th scope="row"><?= $boss[$i]['id'] ?></th>
        <td><?= $boss[$i]['nom']?></td>
        <td><img class="img-fluid" style="height: 44px" src="<?= $boss[$i]['image'] ?>"> </td>
        <td><?= $boss[$i]['santé'] ?></td>
        <td><?= $boss[$i]['mana'] ?></td>
        <td><?= $boss[$i]['wiki'] ?></td>
    </tr>

    <?php } ?>

    </tbody>
</table>

</body>
</html>
