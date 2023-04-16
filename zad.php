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
<h1>Kalkulator</h1><br>
<h2>Prosty</h2><br>
<form action="oblicz.php" method="post">
 <input type="number" name="a">
    <select name="dzialanie">
      <option name="dodawanie">Dodawanie</option>
      <option name="odejmowanie">Odejmowanie</option>
      <option name="mnozenie">Mnożenie</option>
      <option name="dzielenie">Dzielenie</option>
    </select>
    <input type="number" name="b"><br>
    <input type="submit" value="oblicz" name="oblicz">
</form><br>
<h2>Zaawansowany</h2><br>
<form action="oblicz.php" method="post">
   <input  name="number"><select name="zaawansowane">
        <option name="cosinus">Cosinus</option>
        <option name="Sinus">Sinus</option>
        <option name="tangens">Tangens</option>
        <option name="bintodec">bintodec</option>
        <option name="dectobin">dectobin</option>
        <option name="dectohex">dectohex</option>
        <option name="hextodec">hextodec</option>
    </select><br>
<input type="submit" value="Oblicz">
</form>
</body>
</html>




