<?php 
    $titre = "Exercice 007";
    require "../../common/template.php";
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=formation_php;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    };
    ?>


<form action="" method="post">
    <table>
        <tr>
            <td>Nom</td>
            <td><input type="text" name="nom"></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td><input type="text" name="prenom"></td>
        </tr>
        <tr>
            <td>Login</td>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Envoyer"></td>
        </tr>
    </table>
</form>

<?php 
    function grainDeSel($x){   
        $chars = '0123456789abcdef';
        $string = '';    
        for($i = 0; $i < $x; $i++){
            $string .= $chars[rand(0, strlen($chars) - 1)];
        }
        return $string;
    }
?>


<?php
    if(isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["nom"]) && isset($_POST["prenom"])){
        $login = $_POST["login"]; 
        $password = $_POST["password"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mdp = md5($password);
        $sel = GrainDeSel(rand (5, 15));
        $fuckIt = $sel. $mdp;
        $requete = $bdd->prepare("INSERT INTO users(nom, prenom, login, password,sel)
                                        VALUES('$nom', '$prenom', '$login', '$fuckIt','$sel')")
                                        or die(print_r($bdd->errorInfo()));
        $requete->execute(array($login, $nom, $prenom, $fuckIt));
    }
?>


