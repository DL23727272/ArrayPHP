<!DOCTYPE html>
<html lang="en">
  <head></head>
  <body>
    <?php
        $dispo = array(
            array(
                array(
                    array("Elfbar",1,2,3,4,5),
                    array("Geekvape",6,7,8,9,10),
                    array("Smok",11,12,13,14,15),
                    array("Vaporesso",16,17,18,19,20),
                    array("Innokin",21,22,23,24,25),
                    array("Aspire",26,27,28,29,30)
                )
            ),
            array(
                array(
                    array("Eleaf",31,32,33,34,35),
                    array("Joyetech",36,37,38,39,40),
                    array("Wismec",41,42,43,44,45),
                    array("Freemax",46,47,48,49,50),
                    array("Uwell",51,52,53,54,55),
                    array("Sigelei",56,57,58,59,60)
                )
            ),
            array(
                array(
                    array("Lost Vape",61,62,63,64,65),
                    array("Voopoo",66,67,68,69,70),
                    array("Aspire",71,72,73,74,75),
                    array("Geekvape",76,77,78,79,80),
                    array("Smok",81,82,83,84,85),
                    array("Vaporesso",86,87,88,89,90)
                )
            ),
            array(
                array(
                    array("Innokin",91,92,93,94,95),
                    array("Horizontech",96,97,98,99,100),
                    array("Vandy Vape",101,102,103,104,105),
                    array("Dovpo",106,107,108,109,110),
                    array("Teslacigs",111,112,113,114,115),
                    array("OBS",116,117,118,119,120)
                )
            ),
            array(
                array(
                    array("Augvape",121,122,123,124,125),
                    array("Wotofo",126,127,128,129,130),
                    array("Hellvape",131,132,133,134,135),
                    array("Vaptio",136,137,138,139,140),
                    array("Voopoo",141,142,143,144,145),
                    array("Aspire",146,147,148,149,150)
                )
            ),
            array(
                array(
                    array("Geekvape",151,152,153,154,155),
                    array("Smok",156,157,158,159,160),
                    array("Vaporesso",161,162,163,164,165),
                    array("Innokin",166,167,168,169,170),
                    array("Eleaf",171,172,173,174,175),
                    array("Joyetech",176,177,178,179,180)
                )
            )
        ); // dami hahah

        //echo  count($dispo);

        for($i = 0; $i < count($dispo); $i++){

            echo "<br><b>Array number: " . $i . "<br></b><br>";

            for($j = 0; $j < count($dispo[$i]); $j++){
                

                for($k = 0; $k < count($dispo[$i][$j]); $k++){

                    echo "<b>Item number " . $k . ":</b> ";

                    for($l = 0; $l < count($dispo[$i][$j][$k]); $l++){

                        echo $dispo[$i][$j][$k][$l] . " ";

                    }

                    echo "<br>";
                }
            }
        }
    ?>
</body>
</html>
