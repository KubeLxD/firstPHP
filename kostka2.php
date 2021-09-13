<!DOCTYPE html>
<html>
<head>
    
</head>

<body bgcolor = "grey">

<form action="" method="POST">

    Początek zakresu: <input type="number" name="pocz"/> <br><br>
    Koniec zakresu: <input type="number" name="kon"/>   <br><br>
    Losowanie: <input type="number" name="los"/>    <br><br>
    <input type="submit" value="Rzut" name="guzik"/>

</form>


<?php
    if(isset($_POST['guzik'])){
    $p = $_POST["pocz"];
    $k = $_POST["kon"];
    $l = $_POST["los"];

        for($i=0; $i<$l; $i++)
        {
            $losowanie = rand($p,$k);
            echo $losowanie;
            echo("<br>");
        }
    }

?>


</body>
</html>