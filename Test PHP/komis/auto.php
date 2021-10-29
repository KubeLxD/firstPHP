<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Komis Samochodowy</title>
    <link rel="stylesheet" href="auto.css"/>

    <?php
        $host = "localhost";
        $name = "root";
        $pass = "";
        $db_name = "Komis1";

       $con = mysqli_connect($host,$name,$pass,$db_name);
       mysqli_select_db($con,$db_name);

        $run = "SELECT id,marka,model FROM samochody";
       $query = mysqli_query($con, $run) or die(mysqli_error());

       $run1 = "SELECT Klient, Samochody_id FROM zamowienia";
       $query1 = mysqli_query($con, $run1) or die(mysqli_error());

       $run2 = "SELECT id, marka, model, rocznik, kolor, stan FROM samochody WHERE marka LIKE 'fiat' ";
       $query2 = mysqli_query($con, $run2) or die(mysqli_error());

       mysqli_close($con);
       ?>

</head>
<body>
        <!--BANER-->
    <div id="baner">
        <h1>SAMOCHODY</h1>
    </div>

         <!--LEWY-->
    <div id="lewy">
        <h2>Wykaz Samochodów</h2>

        <?php

        while($row=mysqli_fetch_row($query))
        {   
            echo "<ul>";
            echo "<li>". $row[0]. " ". $row[1]." ". $row[2]."</li>";
            echo "</ul>";
        }

        ?>
       

        <h2>Zamówienia</h2>

        <?php

            while($row=mysqli_fetch_row($query1))
            {   
                echo "<ul>";
                echo "<li>". $row[0]. " ". $row[1]."</li>";
                echo "</ul>";
            }

        ?>

    </div>

         <!--PRWAY-->
    <div id="prawy">
            <h2>Pełne dane: Fiat</h2>
        <?php

            while($row=mysqli_fetch_row($query2))
            {   
                echo $row[0]. "/".$row[1]."/".$row[2]."/".$row[3]."/".$row[4]."/".$row[5];
                echo "</br>";  
            }

        ?>

    </div>

         <!--STOPKA-->
    <div id="stopka">
            <table>
                <tr>
                    <td><a href="kweredny.txt" target="blank_">Kwerendy</a></td>
                    <td>Autor: ##########</td>
                    <td><img src="auto.png"></td>
                </tr>
            </table>
    </div>

</body>
</html>