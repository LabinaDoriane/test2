<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hubble_NASA</title>
    <link rel="stylesheet" href="style1.css">
    <!-- Cdn boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!--Cdn Material design-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            $bdd = new PDO('mysql:host=127.0.0.1;dbname=mile_delice;charset=utf8', 'Root', 'Simplon974', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $reponse = $bdd->query('SELECT * FROM recette');
            while ($donnees = $reponse->fetch()) {
            ?>

                <div class="col-4 ">
                    <?php echo '<a class="lien" href="page_recette.php?id=' . $donnees['id'] . '">'; ?>
                    <div class="card">



                        <?php echo '<img class="card-img-top " src="' . $donnees['img'] . '" >'; ?>
                        <div class="card-body">
                            <h4 class="card-title">
                                <?php echo $donnees['nom']; ?>
                            </h4>
                            <p class="card-text">
                                <strong>Ingredients :</strong>
                                <?php echo $donnees['ingredient1'], ","; ?>
                                <?php echo $donnees['ingredient2'], ","; ?>
                                <?php echo $donnees['ingredient3'], "..."; ?>
                            </p>
                            <div class="temps">
                                <span class="material-icons minia ">
                                    access_time
                                </span>
                                <?php echo $donnees['preparation'], "min"; ?>


                                <span class="material-icons minia">
                                    microwave
                                </span>
                                <?php echo $donnees['cuisson'], "min"; ?>

                                <span class="material-icons minia">
                                    group
                                </span>
                                <?php echo $donnees['portion']; ?>
                            </div>
                        </div>
                    </div>
                    <?php echo '</a>' ?>
                </div>



            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
            ?>

        </div>
    </div>



</body>

</html>

<?php echo '<a href="page_recette.php?id=' . $donnees['id'] . '">'; ?>