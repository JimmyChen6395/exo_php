<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo_parti01</title>
</head>
<body>

<!-- EXERCICE 001 -->

    <?php
        $a = 3;
        $b = 5;
        $c = 7;
       echo "<p>A : $a</p> 
             <p>B : $b</p> 
             <p>C : $c</p>";

        $coucou = $a;
        $a = $b;
        $b = $c;
        $c = $coucou;
        echo "<p>A : $a</p> 
              <p>B : $b</p> 
              <p>C : $c</p>";   
    ?>



<!-- EXERCICE 002 -->

    <?php
        $Nom = "Marie";
        $Nom2 = "Pierre";
        $Age = 29;
        $Age2 = 30;
        $Genre = "homme";
        $Genre2 = "femme";


        // $a = $Nom;
        // $Nom = $Nom2;
        // $Nom2 = $a;

        // $b = $Age;
        // $Age = $Age2;
        // $Age2 = $b;

        // $c = $Genre;
        // $Genre = $Genre2;
        // $Genre2 = $c;


        echo "<p>$Nom à $Age, et c'est un $Genre</p>";
        echo "<p>$Nom2 à $Age2, et c'est une $Genre2</p>";
    ?>



<!-- EXERCICE 003 -->
   
    <?php 
        $personne = [
            "id" => 1,
            "nom" => "Chen",
            "prénom" => "Jimmy",
            "age" => 26,
            "date" => 1995,
        ];
        

            echo "<p> Bonjour". $personne['prénom'] . $personne['nom'] .", tu as ".$personne['age'] ." ans, tu es proablement né en ". $personne["date"]."</p>";
    ?>





</body>
</html>