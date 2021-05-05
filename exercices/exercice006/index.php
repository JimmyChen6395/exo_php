<?php 
    $titre = "Exercice 006 - Hébergeur d'images";
    require "../../common/template.php";
    $dir = "./uploads";
    $fichier = scandir($dir);
?>




<form method="post" action="" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
        <table>
            <tr>
                <td><input type="file" name="fichier"></td>
            </tr>
            <tr>
                <td><input type="submit" /></td>
            </tr>
        </table>
</form>









