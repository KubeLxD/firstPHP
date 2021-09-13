<!DOCTYPE html>
<html>
<head>
    
</head>

<body bgcolor = "grey">

<form action="" method="POST">

   

</form>


<?php

    $srednia=0;
    $ilosc = 0;
    $suma = 0;

        for($i=0; $i<13; $i++)
        {
            $ilosc++;
            $losowanie = rand(1,6);
            $suma=$suma+$losowanie;
            echo $losowanie;
            echo("<br>");

            $srednia =$suma/$ilosc;
        }

        echo ("Srednia: $srednia");
    

?>


</body>
</html>