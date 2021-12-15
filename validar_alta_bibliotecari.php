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
        $seguretatsocial = $_POST['seguretat_social'];
        $datainici = $_POST['data_inici'];
        $salari = $_POST['salari'];
        $bibliotecaricap= $_POST['capsi_capno'];

        if ($_POST["metode"]=="ALTA_BIBLIOTECARI"){
            $filename="alta_bibliotecari/Validar_bibliotecari.txt";
            $fitxer=fopen("alta_bibliotecari/Validar_bibliotecari.txt","a") or die ("No s'ha pogut crear el fitxer");
            $texte = $nom.":".$adreca.":".$email.":".$telefon.":".$ID.":".$password.":".$seguretatsocial.":".$datainici.".".$salari.":".$bibliotecaricap."\n";
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