<!DOCTYPE html>
<html lang="en">
  <head></head>
  <body>
    <?php
    $dispo = array(
        array(
            array("Elfbar",22,18),
            array("Geekvape",15,13),
            array("Smok",5,2),
            array("Vaporesso",17,15)
        ),
        array(
            array("Innokin",22,18),
            array("Oxva",15,13),
            array("Bar Juice",5,2),
            array("Flum",17,15)
        ),
        array(
            array("Spiritbar",22,18),
            array("Double Drip",15,13),
            array("Flum",5,2),
            array("Flava",17,15)
        ),
        array(
            array("Chillax",22,18),
            array("Shift",15,13),
            array("Relx",5,2),
            array("Vipo Cube",17,15)
        ),
        array(
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
        )
    );

    for ($i = 0; $i < count($dispo); $i++) {
        echo "<p><b>array no. $i</b></p>";
        echo "<ul>";
        for ($j = 0; $j < count($dispo[$i]); $j++) {
            echo "<li>";
            for ($k = 0; $k < count($dispo[$i][$j]); $k++) {
                echo $dispo[$i][$j][$k] . ", ";
            }
            echo "</li>";
        }
        echo "</ul>";
    }
    ?>
  </body>
</html>