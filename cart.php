<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <style type="text/css">
        *{
            text-decoration: none;
        }
    body{
        background-color: lightblue;
        text-align: center;
    }


    .navbar{
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 10px 10px 60px black;
        border-radius: 20px;
        background-color: white;
        overflow: auto;
    }
    .logo{
        height: 100px;
        border-radius: 200px;
    }
    ul {
        list-style: none;
        padding: 0;
        display: flex;
    }
    li {
        display: inline;
        margin: auto; /* Adjust margin as needed */
    }
    li a{
        text-align: center;
        padding: 15px;
        color: black;
        text-decoration: none;
        font-size: 25px;
        justify-content: center;
        display:inline ;
    }

    #logout{
        color: red;
    }
    .footer{
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: white;
        color: black;
        text-align: center;
        padding: 10px 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .footer-left{
        margin-left: 20px;
    }
    .footer-right{
        margin-right: 20px;

    }
.social{
    height: 50px;
    width: 150px;
}
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navdiv" onclick="window.location.href">
            <img class="logo" src="kk.png" alt="logo" onclick="window.location.href">
        </div>
        <ul>
            <li><a href="userhome.php" id="home">Home</a></li>
            <li><a href="cart.php" id="cart">Cart</a></li>
            <li><a href="aboutus.php" id="aboutus">About Us</a></li>
            <li><a href="#logout" id="logout">Log Out</a></li>
        </ul>
    </nav>
    <div class="footer">
        <div class="footer-left">
            SHNABO RESTAURANT
        </div>
        <div class="footer-center">
            &copy; 2024 
        </div>
        <div class="footer-right footer-icons">
            <img class="social" src="social2.png">
        </div>

</body>
</html>
