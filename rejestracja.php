<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>rejestracja</title>
    <link rel="stylesheet" href="styleRegisterLogin.css">
</head>
<body>
<div id="container">
<form action="rejestracja.php" method="post">
    <label><input type="text" name="imie" placeholder="imie"></label><br>
    <label><input type="text" name="nazwisko" placeholder="nazwisko"></label><br>
    <label><input type="text" name="email" placeholder="adres email"></label><br>
    <label><input type="password" name="pass1" placeholder="hasło "></label><br>
    <label><input type="password" name="pass2" placeholder="powtórz hasło"></label><br>
    <label><a href="regulamin.txt">Akceptuję regulamin</a><input type="checkbox" name="check"></label>
    <label><input type="submit" value="zarejestruj sie"></label>
</form><br>
    <a href="zaloguj.php">Masz już konto w naszym serwisie? Zaloguj sie!</a>
</div>


</body>
</html>


<?php

 function validateImieNazwisko($imie, $nazwisko)
 {

     $onlyLettersPattern='/^[a-zA-Z]+$/';

     if(!preg_match($onlyLettersPattern, $imie)&&!preg_match($onlyLettersPattern, $nazwisko))
         return false;
     return true;

     }
     function  validatePassword ($pass1, $pass2){
         if($pass1!=$pass2)
             return false;
         return true;
         }
    function  passwordSame($pass1, $pass2){
        $passwordPattern='/^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/';
         if(!preg_match($passwordPattern, $pass1)|| !preg_match($passwordPattern, $pass2))
             return false;
         return true;
 }
     function validateEmail($email)
     {
         return filter_var($email, FILTER_VALIDATE_EMAIL);

     }


if($_SERVER['REQUEST_METHOD']==='POST') {
    // var_dump($_POST);
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $isCkecked = false;
    if ($_POST['check'] == 'on')
        $isCkecked = true;


    $isOK=true;
    if(!validateImieNazwisko($imie, $nazwisko)){
        echo "<div style= 'color: red'>" . "Imie lub nazwisko nie może zawierać cyfr lub być puste" . "</div>";
        $isOK=false;

    }
    if(!validatePassword($pass1, $pass2)){
        echo "<div style='color: red'>"."Hasła różnią się od siebie"."</div>";
        $isOK=false;
    }
    if(!passwordSame($pass1, $pass2)){
        echo "<div style='color: red'>" . "Hało nie spełnia warunków, hasło powinno zawierać min 8 znaków, w tym min jeden znak specjalny, jedną cyfrę, jedną wielką litere i jedną małą literę" . "</div>";
        $isOK=false;
    }
    if(!validateEmail($email)){
        echo "<div style='color: red'>"."Niepoprawny adres email"."</div>";
        $isOK=false;
    }
    if(!$isCkecked){
        echo "<div style='color: red'>"."Prosze zaakceptować warunki użytkowania strony"."</div>";
        $isOK=false;
    }
    if($isOK)
        echo "wszystko ok";



}
?>