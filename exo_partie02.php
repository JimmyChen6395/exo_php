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
</body>
</html>