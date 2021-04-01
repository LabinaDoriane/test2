<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="recette.css">
    <!-- Cdn boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!--Cdn Material design-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

<body>

    <?php
    $id = $_GET['id'];
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=mile_delice;charset=utf8', 'Root', 'Simplon974', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $reponse = $bdd->query('SELECT * FROM recette WHERE id="' . $id . '"');
    echo '<div class="container2">';

    while ($donnees = $reponse->fetch()) {
    ?>
        <div class="container>">
            <h2 class="titre"> <?php echo $donnees['nom']; ?></h2>
            <div class="etoile">
                <span class="material-icons">star_rate</span>
                <span class="material-icons">star_rate</span>
                <span class="material-icons">star_rate</span>
                <span class="material-icons">star_rate</span>
                <span class="material-icons">star_half</span>
            </div>

            <div class="row">
                <div class="col-2"></div>
                <?php echo '<img class="img col-5 " src="' . $donnees['img'] . '" ">'; ?>
                <div class="col-5"></div>
            </div>

            <div class="prepa m-4">

                <h5 class="temps"><strong>Temps</strong></h5>
                <div class="preparation m-3"> <strong>Preparation : </strong><?php echo $donnees['preparation']; ?> min</div>
                <div class="cuisson m-3"><strong>Cuisson : </strong><?php echo $donnees['cuisson']; ?> min</div>

            </div>

            <div class="row">
                <div class="ingredient col-3 m-3">
                    <ul class="mt-4">
                        <li><?php echo $donnees['ingredient1']; ?></li>
                        <li><?php echo $donnees['ingredient2']; ?></li>
                        <li><?php echo $donnees['ingredient3']; ?></li>
                        <li><?php echo $donnees['ingredient4']; ?></li>
                        <li><?php echo $donnees['ingredient5']; ?></li>
                        <li><?php echo $donnees['ingredient6']; ?></li>
                        <li><?php echo $donnees['ingredient7']; ?></li>
                        <li><?php echo $donnees['ingredient8']; ?></li>
                        <li><?php echo $donnees['ingredient9']; ?></li>
                        <li><?php echo $donnees['ingredient10']; ?></li>
                    </ul>
                </div>
            </div>

            <div class="etape"> <?php echo $donnees['etape']; ?></div>




        <?php
    }
    $reponse->closeCursor(); // Termine le traitement de la requête
        ?>








</body>

</html>