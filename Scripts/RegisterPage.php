<!--
    Author: Alexander Höll
    Version: 1.0
    Date: 17.11.2022
    Project: ILA Project 1: HTML / CSS Formula
-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="RegisterStyling.css"><br>
    <script src="SubmitForm.js" defer></script>

    <title>Formula</title>
</head>
<body>
    <form action="DBWriter.php" method="post" onsubmit="return ValidateInput(this)">
        <div class="divHeader"></div>
        <div class="divMain">
            <div>
                <h2>Account</h2>
            </div>
            <div class="divInput">
                <label>First Name: </label> 
                <input type="text" placeholder="Max" id="firstName" name="firstName" required autofocus><br>
                <label>Last Name: </label> 
                <input type="text" placeholder="Musterman" id="lastName" name="lastName" required><br>
                <label>Birthdate: </label> 
                <input type="date" placeholder="01.01.1990" id="birthDate" name="birthDate" required><br>
                <label>E-Mail: </label>
                <input type="email" placeholder="max.musterman@lbs4.salzburg.at" id="mailFirst" name="mailFirst" required><br>
                <label>Confirme E-Mail: </label>
                <input type="email" placeholder="max.musterman@lbs4.salzburg.at" id="mailSecond" name="mailSecond" required><br>
                <label>Password: </label>
                <input type="password" required="true" id="passwordFirst" name="passwordFirst" required pattern=".{8,}"><br>
                <label>Confirme Password: </label>
                <input type="password" required="true" id="passwordSecond" name="passwordSecond" required pattern=".{8,}"><br>
            </div>        
        </div>

        <div class="divMain">
            <div>
                <h2>Adress</h2>
            </div>
            <div>
                <label>Street: </label> 
                <input type="text" placeholder="Hubweg 4" id="street" name="street" required><br>
                <label>City: </label> 
                <input type="text" placeholder="St.Johann im Pongau" id="city" name="city" required><br>
                <label>Place: </label> 
                <input type="number" placeholder="5600" id="place" name="place" required><br>
                <label>Federal State: </label>
                <select id="federalState" name="federalState" placeholder="Select" required>
                    <option value="" hidden disabled selected>Select</option>              
                    <option value="Salzburg">Salzburg</option>
                    <option value="Vienna">Wien</option>
                    <option value="Klagenfurt">Klagenfurt</option>
                    <option value="Tirol">Tirol</option>
                    <option value="Upperaustria">Oberösterreich</option>
                    <option value="Loweraustria">Niederösterreich</option>
                    <option value="Vorarlberg">Vorarlberg</option>
                    <option value="Styr">Steiermark</option>
                </select><br>
                <label>Phone Number: </label>
                <input type="number" placeholder="00436641234567" id="phoneNumber" name="phoneNumber"><br>
            </div>
        </div>

        <div class="divMain">
            <div>
                <h2>Upload File</h2>
            </div>
            <div>
                <label>Upload File: </label>    
                <input style="width: auto;" type="file" id="file"><br>
            </div>
            <div style="display: flex;">                
                <button style="background-color: green;" type="submit" class="button-53" id="submitBtn" onclick="">Submit!</button>
                <button style="background-color: red;" type="reset" class="button-53" id="resetBtn">Reset Page</button>
                <button type="reset" onclick="location.href='Index.php'" class="button-53">Go Back</button>
                
            </div>
        </div>        
    </form>
</body>
</html>