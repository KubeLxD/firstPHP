<!DOCTYPE html>
<html>
<head>
    
    <?php

        $host = "localhost";
        $name_db = "root";
        $pass_db = "";
        $db = "4k";
        
        $on = mysqli_connect($host, $name_db, $pass_db, $db);
        mysqli_select_db($con, $db);

        if(isset($_GET['sub']))
        {
            $id = $_GET['id'];
            $imie = $_GET['im'];
            $nazwisko = $_GET['inaz'];
            $srednia = $_GET['sr'];

        }


    ?>

</head>

<body bgcolor = "grey">

</body>
</html>