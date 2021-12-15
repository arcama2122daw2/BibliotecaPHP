<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta llibres</title>
</head>
<body>
    <form action="http://localhost/projecte/validar_llibre.php" method="post">
    <input type="hidden" name="metode" value="ALTA_LLIBRE" />
    Titol llibre: <br>
    <input type="text" name="titol"/><br><br>

    Autor llibre: <br>
    <input type="text" name="autor"/><br><br>

    ISBN llibre: <br>
    <input type="text" name="ISBN"/><br><br>

    Llibre en préstec?(Si/No): <br>
    <input type="text" name="prestecsi_prestecno"/><br><br>

    Data inici préstec (si no està deixat és 0): <br>
    <input type="text" name="data_inici_prestec"/><br><br> <!--com es fa el booleà-->

    Codi de l'usuari que té en préstec el llibre (si no està deixat és 0): <br>
    <input type="text" name="codi"/><br><br>

    <button>gestionar Llibre</button>
    </form>
</body>
</html>