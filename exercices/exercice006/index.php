<?php 
    $titre = "Exercice 006 - Hébergeur d'images";
    require "../../common/template.php";
    $dir = "./uploads";
    $fichier = scandir($dir);
    
    if(isset($_FILES["fichier"]) && $_FILES["fichier"]["error"] == 0){
        if($_FILES["fichier"]["size"] <= 10000000){
            $extensionArray = ["png", "gif", "jpg", "JPEG", "jfif", "jpeg"];
            $infoFichier = pathinfo($_FILES["fichier"]["name"]);
            $extensionImage = $infoFichier["extension"];
            if(in_array($extensionImage, $extensionArray)){
                $destination = "uploads/" . time() . basename($_FILES["fichier"]["name"]);
                move_uploaded_file($_FILES["fichier"]["tmp_name"], $destination);
                echo "<h3>Envoi du fichier " . $_FILES["fichier"]["name"] . " réussi !!! :)";
            }
        }
    } 
    ?>


<div class="miseEnPage">
    <?php 
       
        foreach($fichiers as $values){
            if($values != "." && $values != ".."){
                $name = substr($values, 10); 
                echo '
                <div class="image">
                <a href="./uploads/' . $values . '">
                <img src="./uploads/' . $values . '" alt="' . $values . '" />
                <p>' . $name . ' </p></a>       
                </div>
                ';
            }
        }
        ?>
</div>



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



        <style>
            .miseEnPage{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
            }
            .image{
                width: 10rem;
                margin: 1rem;
                padding: 0.5rem;
                border: solid 1px black;
            }
            .image > a > img{
                width: 100%;
                height: 10rem;
                box-shadow: 0px 10px 13px -7px #000000, -6px -3px 4px 5px rgba(0,0,0,0);
                margin-bottom: 1rem;
            }
        
            .image > a > p{
                text-align: center;
            }
        </style>







