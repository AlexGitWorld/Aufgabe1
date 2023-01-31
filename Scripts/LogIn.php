<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="RegisterStyling.css"><br>
    <title>Document</title>
</head>
<body>
    <form action="ValidateLoginDB.php" method="post">
    <div class="divHeader"></div>
    <div>
        <h2>Log In</h2>
    </div>
        <div class="divMain">
            <div class="divInput">   
                <label>User Name:</label>
                <input id="userName" name="userName" type="text" placeholder="enter name">        
            </div>
            <div class="divInput">
                <label>Password:</label>
                <input id="passwordTest" name="passwordTest" type="password" placeholder="enter password">
            </div>
            <div class="divInput"> 
                <button style="background-color: green;" type="submit" class="button-53" id="submitBtn" onclick="">Log In</button>
            </div>
        </div>
    </form>
    
</body>
</html>