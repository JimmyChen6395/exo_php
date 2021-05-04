<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo_parti02</title>
</head>
<body>
<style>
</style>


    <h1>EXERCICE 11</h1>
    <?php 
      
        function calcul($a,$b,$c){
            $delta = ($b*$b) - (4*$a*$c);


            if ($delta < 0){
                echo "<p>Pas de solution</p>";
            }elseif ($delta == 0){
                $resultat = -$b / (2*$a);
                echo "<p>C'est x = $resultat</p>";
            }elseif ($delta > 0){
                $racine1 = (-$b-sqrt($delta))/(2*$a);
                  $racine2 = (-$b+sqrt($delta))/(2*$a);
                  echo "<p>racine A = $racine1</p>";
                  echo "<p>racine B = $racine2</p>";
            }
            
        }

        calcul(rand(0,10),rand(0,10),rand(0,10))
    ?>

    <h1>EXERCICE 12</h1>
    <?php 
    
        $guy = [
            'nom' => 'Guy',
            'age' => '42',
            'sexe' => 'homme'];

        $jimmy = [
            'nom' => 'Jimmy',
            'age' => '26',
            'sexe' => 'homme'];

            function afficherPersonnes($n){
                echo "<p>Nom :".$n['nom']."</p>
                     <p>Age:".$n['age']."</p>
                     <p>Sexe :".$n['sexe']."</p>";
            }
        afficherPersonnes($guy);
        afficherPersonnes($jimmy);
    
    ?>

    <h1>EXERCICE 13</h1>

    <?php 
        $gizelle = [
            'nom' => 'Gizelle',
            'age' => '63',
            'sexe' => 'femme'
        ];
        $bernadette = [
            'nom' => 'Bernadette',
            'age' => '86',
            'sexe' => 'femme'
        ]; 
        
        $multi = [
            $guy,$jimmy,$gizelle,$bernadette
        ];

        foreach($multi as $sale){
            afficherPersonnes($sale);
            echo "<p>---------</p>";
        }
    ?>

    <h1>EXERCICE 14</h1>

    <?php
    
    function moyenne($valeurs){
        $m=0;
        $nb=0;
       foreach($valeurs as $value){
           $m+=$value;
           $nb++;
       }
       $m=$m/$nb;
       return $m;
    }
    foreach($tableauComplet as $value){
        afficherPersonnes($value);
        $moyenne =0;
        $nb = 0;
        $Notes = [
            '1' => rand(1,20),
            '2' => rand(1,20),
            '3' => rand(1,20),
            '4' => rand(1,20)
        ];
        foreach ($Notes as $key => $value){
            echo "Note: $key : $value <br>";
            
        } 
        $moyenne = moyenne($Notes);
        echo "La moyenne est de : $moyenne <br>";
        echo '------------------------------<br>';
    }
    ?>










</body>
</html>