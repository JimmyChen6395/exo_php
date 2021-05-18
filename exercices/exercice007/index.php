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

<?php
    if(isset($_POST["login"]) && isset($_POST["password"])){
            
        $login = $_POST["login"];  
        $password = $_POST["password"];

        $selrecup = $bdd->query("SELECT u.sel 
                                FROM users u
                                WHERE login='$login'")
                                or die(print_r($bdd-> errorInfo()));
        $sel = $selrecup->fetch();
    }
?>