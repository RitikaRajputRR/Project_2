<html>
    <head>
        <title>
            view page
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
                width: 1400px;
                margin-top: 30px;
                margin-left: 50px;
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
            table{
                width: 500px;
                height: 50px;
                margin-top: auto;
                margin-left: auto;
                margin-right: auto;
            }

        </style>
    </head>
    
    <body class="colour">
        <p class="a">Phone Book</p>
        <nav>
        <li><A href="home.php">HOME</A></li>
                <li><A href="Add new.php">Add New</A></li>
                <li><A href="viewall.php">View All</A></li>
                <li><A href="profile.php">Profile</A></li>
                <li><A href="view.php">view</A></li>
                <li><A href="changepassword.php">change password</A></li>
                <li><A href="logout.php">Logout</li>
                <li><A href="contactus.php">Contact us</A></li>
            
        </nav>



        <?php
            session_start();
            $b=$_SESSION['p'];
            $con=mysqli_connect('localhost','root','seedit','phonebook');
            $q="select*from info where name='$b'";
            $result=mysqli_query($con,$q);
            echo"<br>";
            echo"<br>";
            echo"<br>";
            echo"<table border=1><tr><td>NAME</td><td>Address</td><td>PhoneNO</td><td>Action</td></tr>";
            
            while($row=mysqli_fetch_array($result))
            {
                echo"
                <tr><td>        $row[name]</td>
                <td>  $row[address]</td>
                <td> $row[phonenumber]</td>
                <td>  <a href='Update.php'>Edit</a></td></tr>";
            }
            echo "</table>";

       ?>
        </body>
</html>