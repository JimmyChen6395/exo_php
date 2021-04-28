<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo_parti01</title>
</head>
<body>

<p>EXERCICE 001</p>

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



<p>EXERCICE 002</p>

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



<p>EXERCICE 003</p>
   
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


<p>EXERCICE 004</p>

<?php
    $nombre = rand(1,20);
    echo "<h3> $nombre </h3>";
    if($nombre >=1  && $nombre <= 5){
        echo "<p> Le nombre est compris entre 1 et 5</p>";
    } 
    else if ($nombre >= 6 && $nombre <= 10){
        echo "<p> Le nombre est compris entre 6 et 10</p>";
    }
    else if ($nombre >= 11 && $nombre <= 15){
        echo "<p> Le nombre est compris entre 11 et 15</p>";
    }
    else if ($nombre >= 16 && $nombre <= 20){
        echo "<p> Le nombre est compris entre 16 et 20</p>";
    }
?>

<p>EXERCICE 005</p>
<?php
    $nombre1 = rand(1,100);
    $nombre2 = rand(1,100);
    echo "<p> $nombre1</p>
    <p> $nombre2</p>";
    echo abs($nombre1 - $nombre2);
    if(abs($nombre1 - $nombre2) >= 25 && abs($nombre1 - $nombre2) <= 75){
        echo "<p> La valeur absolue de $nombre1 - $nombre2 est comprise entre 25 et 75";
    }
    else{
        echo "<p> La valeur absolue de $nombre1 - $nombre2 n'est pas comprise entre 25 et 75";
    }
?>

<p>EXERCICE 006</p>

<?php
    $month = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Décembre"];
    $number = rand(1,12);

    switch($number){
        case 1 : 
          echo  "<p>Le mois $number correspond au mois de $month[0]";
        break;
        case 2 : 
            echo"<p>Le mois $number correspond au mois de $month[1]";
        break;
        case 3 : 
            echo"<p>Le mois $number correspond au mois de $month[2]";
        break;
        case 4 : 
            echo"<p>Le mois $number correspond au mois de $month[3]";
        break;
        case 5 : 
            echo"<p>Le mois $number correspond au mois de $month[4]";
        break;
        case 6 : 
            echo"<p>Le mois $number correspond au mois de $month[5]";
        break;
        case 7 : 
            echo"<p>Le mois $number correspond au mois de $month[6]";
        break;
        case 8 : 
            echo"<p>Le mois $number correspond au mois de $month[7]";
        break;
        case 9 : 
            echo"<p>Le mois $number correspond au mois de $month[8]";
        break;
        case 10 : 
            echo "<p>Le mois $number correspond au mois de $month[9]";
        break;
        case 11 : 
            echo"<p>Le mois $number correspond au mois de $month[10]";
        break;
        case 12 : 
            echo"<p>Le mois $number correspond au mois de $month[11]";
        break;
    }
?>


<p>EXERCICE 007</p>
<table border="">
        <tr>
        <th>Nombre</th>
        <th>Carré</th>
        <th>Racine carrée</th>
        </tr>

    <?php
        for($i=1; $i<=20; $i++){
            echo '<tr>
            <td>'.$i.'</td>
            <td>'.$i*$i.'</td>
            <td>'.sqrt($i).'</td>
            </tr>';
        }
    ?>
</table>


<p>EXERCICE 008</p>
<?php
        $n= rand(5,15);
        $etape = 0;
        $resultat = 0;

        for($i=$n; $i>0; $i--){
            $etape ++;
            $resultat += $n;
            echo '<p>Etape : '.$etape.' résultat = '.$resultat.'</p>';
        }
    ?>


<p>EXERCICE 009</p>

<?php
        $essai = 0;
        do{
            $essai ++;
            $n= rand(1,20);
            if($n<=15)
            echo '<p>Essai '.$essai.' : '.$n.' est trop petit (<16)</p>';
        }while($n<=15);
        echo "<p>Le nombre choisi est $n</p>";
    ?>


<p>EXERCICE 010</p>

<?php
        $noteDeGuy = [];
        $note = 0;
        do{
            $note ++;
            $n = rand(1,20);
            $noteDeGuy['note n°'.$note] = $n;
    }while(count($noteDeGuy)<20);
    print_r($noteDeGuy);
    $nbreNotes = count($noteDeGuy);
    $noteMax = 20;
    $additionNotes = array_sum($noteDeGuy);
    $additionNotesMax = $nbreNotes *$noteMax;
    $moyenneNotes = $additionNotes / $additionNotesMax *100;

    if($moyenneNotes >= 0 && $moyenneNotes <= 30){
        echo "<p style = 'font-weight : bold;'>La moyenne de l'année est de $moyenneNotes :  Ca ira mieux l'année prochaine !!!";
    }
    else if ($moyenneNotes >= 30 && $moyenneNotes <= 50){
        echo "<p style = 'font-weight : bold;'>La moyenne de l'année est de $moyenneNotes : Voilà pourquoi il ne faut pas regarder des streams jv durant les cours!</p>";
    }
    else if ($moyenneNotes >= 50 && $moyenneNotes <= 60){
        echo "<p style = 'font-weight : bold;'>La moyenne de l'année est de $moyenneNotes : Pas de bol, t'y étais presque !!!</p>";
    }
    else if ($moyenneNotes >= 60 && $moyenneNotes <= 70){
        echo "<p style = 'font-weight : bold;'>La moyenne de l'année est de $moyenneNotes : Ca passe... Sans classe, mais ça passe !!!</p>";
    }
    else if ($moyenneNotes >= 70 && $moyenneNotes <= 80){
        echo "<p style = 'font-weight : bold;'>La moyenne de l'année est de $moyenneNotes : Bien joué, objectif atteint !!!</p>";
    }
    else if ($moyenneNotes >= 80 && $moyenneNotes <= 100){
        echo "<p style = 'font-weight : bold;'>La moyenne de l'année est de $moyenneNotes : Master Class, 5 étoiles pour toi</p>";
    }
    ?>




</body>
</html>
