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
            <td>Login</td>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Se connecter"></td>
        </tr>
    </table>
</form>
<p>Pas encore inscrit ?... <a href="./inscription.php">S'enregistrer</a></p>
