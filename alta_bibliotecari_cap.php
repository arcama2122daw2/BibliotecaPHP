<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document d'alta bibliotecari</title>
</head>
<body>
    <form action="http://localhost/projecte/validar_alta_bibliotecari.php" method="post">
    <input type="hidden" name="metode" value="ALTA_BIBLIOTECARI" />
    Nom i cognoms: <br>
    <input type="text" name="nom"/><br><br>

    Adreça física: <br>
    <input type="text" name="adreca"/><br><br>

    email: <br>
    <input type="email" name="correu"/><br><br>

    telèfon: <br>
    <input type="text" name="telefon"/><br><br>

    ID personal de treballador (8 caràcters): <br>
    <input type="text" name="ID"/><br><br>

    Contrasenya <br>
    <input type="password" name="pass"/><br><br>

    Número de Seguretat Social: <br>
    <input type="text" name="seguretat_social"/><br><br>

    Dia que comença a treballar:<br>
    <input type="date" name="data_inici"/><br><br>

    Salari: <br>
    <input type="text" name="salari"/><br><br>

    Bibliotecari en cap?: <br>
    <input type="text" name="capsi_capno"/><br><br>

    <button>Donar d'alta nou bibliotecari</button>
    </form>
</body>
</html>