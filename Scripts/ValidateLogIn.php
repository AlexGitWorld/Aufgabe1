<?php

session_start();

$userData = [];
$row = 1;
$items = [$_POST["userName"], $_POST["passwordTest"]];
if (($handle = fopen("CSVData.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);    
        $row++;
            
        for ($c=0; $c < $num; $c++){
            array_push($userData, $data[$c]);
        }
    }
}

    fclose($handle); 

    $pepper = "42662%&=1";
    
    for ($i = 0; $i < 18; $i++){

        if($items[0] == $userData[$i] and password_verify($pepper . $items[1], $userData[$i + 4])){
            echo "success";
            $_SESSION["UserID"] = $items[0];
        }

    }

header("Location: Index.php");

?>