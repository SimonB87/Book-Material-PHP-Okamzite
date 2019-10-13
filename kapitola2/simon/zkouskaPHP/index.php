<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dokument</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Kapitola 2</h1>

    <div class="block">
        <h4>For cyklus</h4>
        <?php
            for($i = 1; $i < 11; $i = $i + 1) {
                echo $i . "<br>";
            }
        ?>
    </div>

    <div class="block">
        <h4>While cyklus</h4>
        <?php
            $i = 1;
            while ($i <= 11) {
                echo $i . "<br>";
                $i = $i + 1;
            }
        ?>
    </div>

    <div class="block">
        <h4>For Each cyklus 1</h4>
        <?php
            $mePole = array("Ahoj", "světe", "nazdar!");
            foreach ($mePole as $hodnota) {
                /* echo $hodnota . "<br>"; */
                echo $hodnota . " ";
            }
        ?>
    </div>

    <div class="block">
        <h4>For Each cyklus 2</h4>
        <?php
            $mePole = array(1 => "Čau", 2 => "jak se", 3 => "máš?!");
            foreach ($mePole as $klic => $hodnota) {
                echo $klic . ": " . $hodnota . "<br>";
            }
        ?>
    </div>

</body>
</html>