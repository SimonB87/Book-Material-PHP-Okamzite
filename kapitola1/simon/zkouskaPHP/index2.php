<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ahoj Světě | CS</title>
</head>
<body>
    <p>
        <?php
            $mePole = array("prvek1" => "Hodnota 1", "prvek2" => "Hodnota 2");
            echo $mePole["prvek1"];
            echo "<br>";
            echo $mePole["prvek2"];
            echo "<br>";
            echo "<br>";
            echo "<br>";

            $mePole2 = array();
            $mePole2["prvek1"] = "Hodnota 01";
            echo $mePole2["prvek1"];
            echo "<br>";
            $mePole2["prvek2"] = "Hodnota 02";
            echo $mePole2["prvek2"];
        ?>
    </p>
</body>
</html>