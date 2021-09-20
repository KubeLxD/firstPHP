<!DOCTYPE html>
<html>
<head>

</head>

<body bgcolor = "grey">
       <form method="GET">

       <strong>DODAWANIE</strong> <br><br>

           ID: <input type="number" name="id"/> 
           Imie: <input type="text" name="im"/>
            Nazwisko:<input type="text" name="naz"/>
           Srednia:  <input type="number" name="sr"/>
            <input type="submit" value="Dodaj" name="guzik"/><br><br><br>


         <strong>USUWANIE</strong> <br><br>

            ID do usuniecia:  <input type="number" name="id1"/>
            <input type="submit" value="Usun" name="usun"/><br><br><br>


        <strong>UPDATE</strong> <br><br>

            ID: <input type="number" name="id2"/> 
           Imie: <input type="text" name="im1"/>
            Nazwisko:<input type="text" name="naz1"/>
           Srednia:  <input type="number" name="sr1"/>
            <input type="submit" value="Update" name="up"/><br><br><br>
        </form>

<?php

    $host = "localhost";
    $name_db = "root";
    $pass_db = "";
    $db = "4k";

    $con = mysqli_connect($host, $name_db, $pass_db, $db);
    mysqli_select_db($con, $db);


    //DODAWANIE

    if(isset($_GET['guzik']))
    {

        $id = $_GET['id'];
        $imie = $_GET['im'];
        $nazwisko = $_GET['naz'];
        $srednia = $_GET['sr'];

        $query = "SELECT * FROM uczen";
        $query1 = "Insert into uczen(id, imie, nazwisko, srednia) values('$id', '$imie', '$nazwisko', '$srednia')";
        $run1 = mysqli_query($con,$query1) or die (mysqli_error());
        $run = mysqli_query($con,$query) or die (mysqli_error());

        if($run)
        {
            echo "<p>";
            echo "<table border=\"1\"><tr>";
            echo "<td><strong>ID</strong></td>";
            echo "<td><strong>Imie</strong></td>";
            echo "<td><strong>Nazwisko</strong></td>";
            echo "<td><strong>Srednia</strong></td>";
            echo "</tr>";

            while($row=mysqli_fetch_row($run))
            {
                echo "</tr>";
                echo "<td bgcolor=\"red\">" . $row[0] . "</td>";
                echo "<td bgcolor=\"red\">" . $row[1] . "</td>";
                echo "<td bgcolor=\"red\">" . $row[2] . "</td>";
                echo "<td bgcolor=\"red\">" . $row[3] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
    }

    //USUWANIE

    if(isset($_GET['usun']))
    {
        $id1 = $_GET['id1'];
        $query2 = "DELETE FROM uczen WHERE id = $id1";
        $query3 = "SELECT * FROM uczen";
        $run2 = mysqli_query($con,$query2) or die(mysqli_error());
        $run3 = mysqli_query($con,$query3) or die(mysqli_error());

        if($run3)
        {
            echo "<p>";
            echo "<table border=\"1\"><tr>";
            echo "<td><strong>ID</strong></td>";
            echo "<td><strong>Imie</strong></td>";
            echo "<td><strong>Nazwisko</strong></td>";
            echo "<td><strong>Srednia</strong></td>";
            echo "</tr>";

            while($row=mysqli_fetch_row($run3))
            {
                echo "</tr>";
                echo "<td bgcolor=\"red\">" . $row[0] . "</td>";
                echo "<td bgcolor=\"red\">" . $row[1] . "</td>";
                echo "<td bgcolor=\"red\">" . $row[2] . "</td>";
                echo "<td bgcolor=\"red\">" . $row[3] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
    }


    //MODYFIKACJA

    if(isset($_GET['up']))
    {
        $id2 = $_GET['id2'];
        $imie1 = $_GET['im1'];
        $nazwisko1 = $_GET['naz1'];
        $srednia1 = $_GET['sr1'];

        $query4 = "UPDATE uczen SET imie = '$imie1', nazwisko = '$nazwisko1', srednia = '$srednia1' WHERE id = $id2";
        $query5 = "SELECT * FROM uczen";

        $run4 = mysqli_query($con,$query4) or die(mysqli_error());
        $run5 = mysqli_query($con,$query5) or die(mysqli_error());

        if($run5)
        {
            echo "<p>";
            echo "<table border=\"1\"><tr>";
            echo "<td><strong>ID</strong></td>";
            echo "<td><strong>Imie</strong></td>";
            echo "<td><strong>Nazwisko</strong></td>";
            echo "<td><strong>Srednia</strong></td>";
            echo "</tr>";

            while($row=mysqli_fetch_row($run5))
            {
                echo "</tr>";
                echo "<td bgcolor=\"red\">" . $row[0] . "</td>";
                echo "<td bgcolor=\"red\">" . $row[1] . "</td>";
                echo "<td bgcolor=\"red\">" . $row[2] . "</td>";
                echo "<td bgcolor=\"red\">" . $row[3] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
    }

?>
</body>
</html>