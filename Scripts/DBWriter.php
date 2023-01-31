<?php

$server = 'localhost:3306';
$username = 'root';
$database = 'labor';
$password = '';

try{

$con = new mysqli( $server, $username, $password, $database);

$con = new PDO("mysql:host=$server; dbname=$database", $username, $password);

$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pepper = "42662%&=1";

$items = ([$_POST["firstName"], $_POST["lastName"], $_POST["birthDate"], $_POST["mailFirst"], password_hash($pepper . $_POST["passwordFirst"], PASSWORD_DEFAULT),
                $_POST["street"], $_POST["city"], $_POST["place"], $_POST["federalState"], $_POST["phoneNumber"]]);


$sql = "INSERT INTO userinformation (FirstName, LastName, Birthdate, Mail, PW, Street, City, Place, FederalState, PhoneNumber) VALUES (
        '$items[0]', '$items[1]', '$items[2]', '$items[3]', '$items[4]', '$items[5]', '$items[6]', '$items[7]', '$items[8]', '$items[9]')";

$con->exec($sql);

}
catch (PDOException $e){
    echo ('Error: ' . $e->getMessage());
}

$con = null;





/*

if(!$con){
    die('Connection not working' . mysqli_connect_error());


    $pepper = "42662%&=1";

    $items = ([$_POST["firstName"], $_POST["lastName"], $_POST["birthDate"], $_POST["mailFirst"], password_hash($pepper . $_POST["passwordFirst"], PASSWORD_DEFAULT),

                $_POST["street"], $_POST["city"], $_POST["place"], $_POST["federalState"], $_POST["phoneNumber"]]);


    $sql = "INSERT INTO userinformation (FirstName, LastName, Birthdate, Mail, PW, Street, City, Place, FederalState, PhoneNumber) VALUES (
            '$items[0]', '$items[1]', $items[2], '$items[3]', '$items[4]', '$items[5]', '$items[6]', '$items[7]', '$items[8]', '$items[9]')";
            
    $con->exec($sql);

    if($con->query($sql) === TRUE) {
        echo "New record created succesfully";
    } else {
        echo "Error " . $sql . "<br>" . $conn->error;
    }
}
else{
    echo ('Connection working');
}

mysqli_close($con);

*/

?>