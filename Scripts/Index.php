<html lang="en">
<head>
    <?php
        session_start();

        if(isset($_SESSION["UserID"])){
           $btnValue = "Log Out"; 
           session_destroy();
           $nav = "location.href='Index.php'";           
        }
        else{
            $btnValue = "Log In";
            $nav = "location.href='LogIn.php'";
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="RegisterStyling.css"><br>
    <title>ProductPage</title>
</head>
<body>
        <div class="divHeader">
        <button class="my-button" onclick=<?php echo $nav;?>><?php echo $btnValue;?></button> 
        </div>
        <div class="wrapper">
            <div class="divPicture">
                <div class="div1">
                    <img class="picture" src="Resourc/wish3.png" alt="wish Logo">
                    <img class="picture" src="Resourc/nkie.jpg" alt="wish Logo">
                </div class="div2">
            </div>
                <div>
                    <h2 class="headerWish">Wish!</label>
                    <label class="lblDiscription">Welcome to Wish! <br>The only online Store wie ORIGINAL brands with prices up to 90% of the normal!</label>
                    <button class="button-53" onclick="location.href='RegisterPage.php'">Go to formula</button>
                    <img class="gif" src="Resourc/sale.gif" alt="sale Gif">
                </div>
            </div>
        </div>        
</body>
</html>