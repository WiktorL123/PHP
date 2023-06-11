<?php


?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>logowanie</title>
	<meta name="description" content="Nauka podstawowego stylizowania elementów formularzy" />
	<meta name="keywords" content="css, odcinek" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
<link rel="stylesheet" href="styleRegisterLogin.css">

</head>

<body>

	<div id="container">
		<form action="zaloguj.php" method="post">
			
			<label><input type="email" placeholder="email" onfocus="this.placeholder=''" onblur="this.placeholder='login'" name="email" ></label>
			
			<label><input type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" name="pass" ></label>
			
			<input type="submit" value="Zaloguj się">
			
		</form>
        <a href="rejestracja.php">Nie masz jeszcze konta? Zarejestruj sie tutaj!</a>
	</div>
	
</body>
</html>
<?php
session_start();

if(isset($_SESSION['zalogowany'])&&$_SESSION['zalogowany']==true)
{
    header("Location: index.php");
    exit();
}


function validateEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
if( isset($_POST['email']) && isset($_POST['pass']) ){
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    if(!validateEmail($email)){
        echo "błędny adres email";
        exit();
    }
    require_once "connect.php";
    try
    {
        $query="SELECT * from uzytkownicy where  adres_email= :email AND `password` = :pass";
        $statement = $db->prepare($query);
        $statement->bindParam(':email', $_POST['email']);
        $statement->bindParam(':pass', $_POST['pass']);
        $statement->execute();
//        $row=$statement->fetch(PDO::FETCH_ASSOC);
        if($statement->rowCount()>0)
        {
            $_SESSION['email']=$_POST['email'];
            $_SESSION['zalogowany']=true;
            header('Location: index.php');
            exit();
        }
        else
        {
            echo "Nie ma takiego numeru";
        }
    }
    catch (PDOException $exception)
            {
            echo "Nastąpił critical error: ".$exception->getCode()." ".$exception->getMessage();
            }

}

?>