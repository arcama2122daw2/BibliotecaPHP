<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta realitzada</title>

    <?php
    echo "<b>CREANT UN FITXER I ESCRIVINT</b><br>";
    $titol = $_POST['titol'];
    $autor = $_POST['autor'];
    $ISBN = $_POST['ISBN'];
    $prestec = $_POST['prestecsi_prestecno'];
    $iniciprestec = $_POST['data_inici_prestec'];
    $codiusuari = $_POST['codi'];

    if ($_POST["metode"]=="ALTA_LLIBRE"){
        $filename="gestio_llibre/Validar_llibre.txt";
        $fitxer=fopen("gestio_llibre/validar_llibre.txt","a") or die ("No s'ha pogut crear el fitxer");
        $texte = $titol.":".$autor.":".$ISBN.":".$prestec.":".$iniciprestec.":".$codiusuari."\n";
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

