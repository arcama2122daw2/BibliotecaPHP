<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta realitzada</title>
    <?php
        echo "<b>CREANT UN FITXER I ESCRIVINT</b><br>";
        $nom = $_POST['nom'];
        $adreca = $_POST['adreca'];
        $email = $_POST['correu'];
        $telefon = $_POST['telefon'];
        $ID = $_POST['ID'];
        $password = $_POST['pass'];
        $prestec = $_POST['prestec'];
        $dataprestec = $_POST['data_prestec'];
        $ISBN = $_POST['ISBN'];

        if ($_POST["metode"]=="ALTA_CLIENT"){
            $filename="alta_usuaris/Validar_usuari.txt";
            $fitxer=fopen("alta_usuaris/Validar_usuari.txt","a") or die ("No s'ha pogut crear el fitxer");
            $texte = $nom.":".$adreca.":".$email.":".$telefon.":".$ID.":".$password.":".$prestec.":".$dataprestec.".".$ISBN."\n";
            fwrite($fitxer,$texte);
            fclose($fitxer);
            echo "El fitxer s'ha creat correctament<br>";
        }else{
            echo "ERROR 405 MÈTODE NO PERMÉS<br>";
            echo "No s'ha validat el llibre";
        }
    ?>
</head>
<body>
</body>
</html>