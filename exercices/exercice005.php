<?php 
    $titre = "Exercice Série 005 - Les formulaires 1/2";
    require "../common/template.php" ?>


<style>
    .container {
        display: flex;
        justify-content: center;
        justify-content: space-evenly;
    }

    .form {
        border: solid blue 2px
    }

    .button {
        background-color: brown;
    }
</style>
<section class="container">

    <div class="form">
        <?php
                if(isset($_GET["prenom"]) && isset($_GET["age"])):
                    echo "<p>Bonjour " . $_GET["prenom"] . ". Tu as " . $_GET["age"] . " ans.</p><p>cette section a été générée par la méthode GET</p>";
                endif;
        ?>


        <form method="get" action="">
                <table>
                    <tr>
                        <td>Prénom:</td>
                        <td><input type="text" name="prenom" /></td>
                    </tr>
                    <tr>
                        <td>Age:</td>
                        <td><input type="text" name="age" /></td>
                    </tr>
                </table>
                <button type="submit">Envoyer</button>
        </form>
    </div>


    <div class="form">
        <?php
                if(isset($_POST["prenom"]) && isset($_POST["age"])):
                    echo "<p>Bonjour " . $_POST["prenom"] . ". Tu as " . $_POST["age"] . " ans.</p><p>cette section a été générée par la méthode POST</p>";
                endif;
        ?>


        <form method="post" action="">
                <table>
                    <tr>
                        <td>Prénom:</td>
                        <td><input type="text" name="prenom" /></td>
                    </tr>
                    <tr>
                        <td>Age:</td>
                        <td><input type="text" name="age" /></td>
                    </tr>
                </table>
                <button type="submit">Envoyer</button>
        </form>  
    </div>

</section>


