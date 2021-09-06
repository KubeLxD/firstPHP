
<?php

/*$zwierz = array("lew", "kot", "wilk", "pies", "slon", "kura", "krowa", "kon", "kruk", "kangur");

for($i=0; $i<=9; $i++)
{
   echo $zwierz[$i];
    echo("<br>");
}

for($j=0; $j<=100; $j++)
{

    $r = rand(10,100);

    if($r%2==0)
    {
        echo $r;
        echo("<br>");
    }
}
*/

$a = $_POST["licz"];
$b = $a;

/*for($i=0; $i<$a; $i++)
{
    echo(rand(1,1000));
    echo("<br>");
}
*/


function fib($a)
{
        if($a==1){ return 1;}
        else if($a==0){ return 0;}
        else
        {
            return fib($a-1) + fib($a-2);
        }
    

}

for($i=0; $i<$b; $i++)
{
    echo fib($a);
    $a -= 1;
    echo("<br>");
}
?>



<html>
<head>

</head>
<body bgcolor="grey">

<form action="" method="POST">

    <input type="number" name="licz"/>
    
    <input type="submit" value="Oblicz"/>
</form>

</body>

</html>