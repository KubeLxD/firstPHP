<?php

    $login1 = array("Jakub", "Kacper");
    $pass1 = array("kox", "kot");

    if(isset($_POST["zaloguj"]))
    {
        $login = $_POST["login"];
        $pass = $_POST["pass"];

        foreach($login1 as $login => $pass)
        {

            if($login1 == $login && $pass == $pass1)
            {
                echo "kox";
            }

            else
            {
                echo "nie kox";
            }
        }
    }
?>




<html>
<head>

</head>
<body bgcolor="grey">

<form action="" method="POST">

    <input type="text" name="login"/>
    <input type="password" name="pass"/>
    
    <input type="submit" value="Oblicz" name="zaloguj"/>
</form>

</body>

</html>