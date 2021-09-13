<!DOCTYPE html>
<html>
<head>
    
</head>

<body bgcolor = "grey">
<?php

    $reszka = 0;
    $orzel = 0;

           for($i=0; $i<100; $i++)
           {
               $los_gaffke = rand(1,2);
               if($los_gaffke==1)
               {
                   $reszka++;
               }

               else
               {
                   $orzel++;
               }
           }

           echo ("Reszka: $reszka");
           echo("<br>");
           echo ("Orzel: $orzel");

           if($reszka==$orzel)
           {
               echo("<br> Remis! <br><br>");
           }
           
           elseif($reszka>$orzel)
           {
            echo("<br> Reszka wygrywa!<br><br>");
           }

           else
           {
            echo("<br> Orzel wygrywa! <br><br>");
           }
           



           echo("RZUT KOSTKA <br><br>");
           $kostka_gaffke = rand(1,6);

           switch($kostka_gaffke)
           {
               case 1:
                echo("Wypadło 1");
                break;

                case 2:
                echo("Wypadło 2");
                break;

                case 3:
                echo("Wypadło 3");
                break;

                case 4:
                echo("Wypadło 4");
                break;

                case 5:
                echo("Wypadło 5");
                break;

                case 6:
                echo("Wypadło 6");
                break;
           }


?>

</body>
</html>