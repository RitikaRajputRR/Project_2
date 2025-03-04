<html>
    <head>
        <title>
            home page
        </title>
        <style>
        .colour{
                background-image: linear-gradient(lightgreen,darkgreen);
            }
             .a{
                font-size: 50px;
                font-weight: bold;
                text-align: center;
                color: skyblue;
                 margin-top:50px ;
                 text-shadow: 0 0 4px black;
             }
             nav
             {
                width: 850px;
                margin-top: 30px;
                margin-left: 330px;
                height:80px;
                border-radius:10px ;
                background-color: cadetblue;
             }
             nav li{
                display: inline-block;
                padding: 25px 30px;
            }

            nav li:hover{
                background-color: orange;
                
            }

            nav a{
                color: black;
                text-decoration: none;
                font-size: 30px;
            }

            nav a:hover{
                text-decoration: underline;
            }

        </style>
    </head>
    <form action="">
    <body class="colour">
        <p class="a">Phone Book</p>
        <nav>
        <li><A href="home.php">HOME</A></li>
                <li><A href="Add new.php">Add New</A></li>
                <li><A href="viewall.php">View All</A></li>
                <li><A href="profile.php">Profile</A></li>
                <li><A href="contactus.php">Contact us</A></li>
            
        </nav>

        </form>
    </body>
</html>