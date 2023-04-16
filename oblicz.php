<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{background-color: black;
            color: white;}
    </style>
</head>
<body>

</body>
</html>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=0;
//var_dump($a);
//var_dump($b);
$wybor=$_POST['dzialanie'];
//var_dump($wybor);
switch ($wybor){
    case "Dodawanie":
        $c=$a+$b;
        echo '<h2>Wynik to'." ".$c.'</h2>';
        break;
    case "Odejmowanie":
        $c=$a-$b;
        echo '<h2>Wynik to'." ".$c.'</h2>';
        break;
    case "Mnożenie":
        $c=$a*$b;
        echo '<h2>Wynik to'." ".$c.'</h2>';
        break;
    case "Dzielenie":
        if ($b==0){
            echo "BŁĄD";
            echo '<h2>Wynik to'." ".$c.'</h2>';
            break;
        }
        $c=$a/$b;
        break;
}

$number = $_POST['number'];
$result = 0;
$zaawansowane = $_POST['zaawansowane'];

switch ($zaawansowane) {
    case "Cosinus":
        $result = cos($number);
        echo '<h2>Wynik to'." ".$result.'</h2>';
        break;
    case "Sinus":
        $result =sin($number);
        echo '<h2>Wynik to'." ".$result.'</h2>';
        break;
    case "Tangens":
        $result=tan($number);
        echo '<h2>Wynik to'." ".$result.'</h2>';
        break;
    case "bintodec":
        $result=bindec($number);
        echo '<h2>Wynik to'." ".$result.'</h2>';
        break;
    case "dectobin":
        $result=decbin($number);
        echo '<h2>Wynik to'." ".$result.'</h2>';
        break;
    case "dectohex":
        $result=dechex($number);
        echo '<h2>Wynik to'." ".$result.'</h2>';
        break;
    case "hextodec":
        $result=hexdec($number);
        echo '<h2>Wynik to'." ".$result.'</h2>';
        break;
}

