<!DOCTYPE html>
<html>
    <head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Thank You</title>

        <style>
            body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-image: url("cyberpunk.jpg")
            }
            .thankyou{
                padding: 50px;
                text-align: center;
                background-color: yellow;
                color: black;
            }
            .div2{
                border: 5px outset gold;
                background-color: orange;
                color: black;    
                text-align: center;
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }
            .image{
                display: block;
                margin-left: auto;
                margin-right: auto;
                height: 20%;
                width: 20%;
            }

            .button{
                border: 5px outset gold;
                outline: 0;
                display: inline-block;
                background-color: coral;
                font-size: 15px;
                padding: 10px;
                text-align: center;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="thankyou">
            <h1>Thank You All For Shopping!</h1>
        </div>

        <br>

        <img src="dragon.jpg" class="image">

        <br>
        <form action="logout.php" method="post">
        <div class="div2">
            <h2>We hope you all have an awesome gaming experience!</h2>
            <br>
            <p><button class="button">Go Home</button></p>
        </div>
        </form>

        <br>
    </body>
</html>