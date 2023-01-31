<?php

session_start();

$pepper = "42662%&=1";
$items = [$_POST["userName"], $_POST["passwordTest"]];

$server = 'localhost:3306';
$username = 'root';
$database = 'labor';
$password = '';

try{
    $con = new PDO("mysql:host=$server; dbname=$database", $username, $password);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    /*$stmt = $con->prepare("SELECT	CASE
    WHEN COUNT(Mail) > 0 THEN 'TRUE'
    ELSE 'FALSE'
    end
    FROM	userinformation
    WHERE	Mail = :mail
    AND		PW = :pw");
    */

    $stmt = $con->prepare("SELECT ID, MAIL, PW FROM userinformation
    WHERE Mail = :mail");

    $stmt->bindParam(':mail', $items[0]);

    $stmt->execute();
    $loginValid = $stmt->fetch();

    
    echo $loginValid["PW"];
    echo "   --------------- ";
    echo $items[1];

    if(password_verify($pepper . $items[1], $loginValid["PW"])){
        echo "success";
        header("Location: Index.php");
        $_SESSION["UserID"] = $loginValid["ID"];
    }
    else{
        echo "in else, no success";
    }
}
catch (PDOException $e){
    echo ('Error: ' . $e->getMessage());
}
    
$con = null;




?>