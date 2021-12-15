<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document d'alta</title>
</head>
<body>
    <form action="http://localhost/projecte/validar_alta_client.php" method="post">
    <input type="hidden" name="metode" value="ALTA_CLIENT" />
    Nom i cognoms: <br>
    <input type="text" name="nom"/><br><br>

    Adreça física: <br>
    <input type="text" name="adreca"/><br><br>

    email: <br>
    <input type="email" name="correu"/><br><br>

    telèfon: <br>
    <input type="text" name="telefon"/><br><br>

    ID personal (8 caràcters): <br>
    <input type="text" name="ID"/><br><br>

    Contrasenya <br>
    <input type="password" name="pass"/><br><br>

    Llibre en prestec (Si/No): <br>
    <input type="text" name="prestec"/><br><br>

    Data inici préstec (si no en té, la data serà 0):<br>
    <input type="text" name="data_prestec"/><br><br>

    ISBN del llibre (si no en té, serà 0) <br>
    <input type="password" name="ISBN"/><br><br>

    <button>Donar d'alta nou client</button>
    </form>
</body>
</html>