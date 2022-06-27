<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Cours PHP</title>
    <meta charset="utf-8">
</head>

<body>
    <?php

    echo '
    <h1>Calculatrice simple en PHP</h1>
    <form method="post">
    Nombre 1:<input name="nombre1" type="text" class="form-control" /><br>
    Nombre 2:<input name="nombre2" type="text" class="form-control" /><br><br>
        <fieldset>
            <legend>Sélectionner un opérateur</legend>
            <br>
            Addition <input type="radio" name="operation" value="+">
            <br><br>
            Soustraction <input type="radio" name="operation" value="-">
            <br><br>
            Multiplication <input type="radio" name="operation" value="x">
            <br><br>
            Division <input type="radio" name="operation" value="/">
            <br><br>
        </fieldset>
        <br><input name="submit" type="submit" name="soumettre" value="Calculer" />
    </form>';

    if (isset($_POST['nombre1']) && isset($_POST['nombre2']) && isset($_POST['operation'])) {
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        $operation = $_POST['operation'];

        if ($nombre1 != NULL and $nombre2 != NULL) {
            if ($operation == "/" and $nombre2 == 0) {
                echo 'On peut pas diviser par 0 voyons !';
            }

            switch ($operation) {
                case "+":
                    $result = $nombre1 + $nombre2;
                    echo 'La somme de ces deux nombres est ' . $result;
                    break;
                case "-":
                    $result = $nombre1 - $nombre2;
                    echo 'La soustraction de ces deux nombres est ' . $result;
                    break;
                case "x":
                    $result = $nombre1 * $nombre2;
                    echo 'Le produit de ces deux nombres est ' . $result;
                    break;
                case "/":
                    $result = $nombre1 / $nombre2;
                    echo 'Le quotient de ces deux nombres est ' . $result;
                    break;
            }
        } else {
            echo (" Il manque des informations ");
        }
    }
    ?>
</body>

</html>