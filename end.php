<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="steen.css">
    <title>rock</title>
</head>
<body>
    <h1>STEEN EN EEN PAPIER EN EEN SCHAAR</h1>
    <hr>
    <?php
        $speler1 = $_GET["p1c"];
        $speler2 = $_GET["p2c"];
        echo "<h1>Speler 1 koos " . $speler1 . ".</h1>";
        echo "<h1>Speler 2 koos " . $speler2 . ".</h1>";
        if ($speler1 == "Steen") {
            if ($speler2 == "Steen") {
                echo "Gelijk gespeeld";
            }
            if ($speler2 == "Papier") {
                echo "Speler 2 wint, Speler 1 is een loser!";
            }
            if ($speler2 == "Schaar") {
                echo "Speler 1 wint, speler 2 is een loser!";
            }
        }
        if ($speler1 == "Papier") {
            if ($speler2 == "Steen") {
                echo "Speler 1 wint, speler 2 is een loser!";
            }
            if ($speler2 == "Papier") {
                echo "Gelijk gespeeld";
            }
            if ($speler2 == "Schaar") {
                echo "Speler 2 wint, Speler 1 is een loser!";
            }
        }
        if ($speler1 == "Schaar") {
            if ($speler2 == "Steen") {
                echo "Speler 2 wint, Speler 1 is een loser!";
            }
            if ($speler2 == "Papier") {
                echo "Speler 1 wint, Speler 2 is een loser!";
            }
            if ($speler2 == "Schaar") {
                echo "Gelijk gespeeld";
            }
        }
    ?>
    
</body>
</html>