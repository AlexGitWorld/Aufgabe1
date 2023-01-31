<?php

    $filename = "CSVData.csv";

    $header = (["Vorname", "Nachname", "Geburtstag", "E-Mail", "Passwort", "Strasse", "Wohnort", "PLZ", "Bundesland", "Telefon"]);

    $fp = fopen($filename, 'w');

    if (file_exists($filename))

    {
        fputcsv($fp, $header);
    }


    $pepper = "42662%&=1";

    $items = ([$_POST["firstName"], $_POST["lastName"], $_POST["birthDate"], $_POST["mailFirst"], password_hash($pepper . $_POST["passwordFirst"], PASSWORD_DEFAULT),

                $_POST["street"], $_POST["city"], $_POST["place"], $_POST["federalState"], $_POST["phoneNumber"]]);

    fputcsv($fp, $items);

    fclose($fp);


    
?>

       
        