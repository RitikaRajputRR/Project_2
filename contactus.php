<html>
    <head>
        <title>
            phonebookpage
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
                    width: 1000px;
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
    
            </style>
        </head>
        
        <body class="colour">
            <p class="a">Phone Book</p>
            <nav>
            <li><A href="home.php">HOME</A></li>
                <li><A href="Add new.php">Add New</A></li>
                <li><A href="viewall.php">View All</A></li>
                <li><A href="profile.php">Profile</A></li>
               
                
                
            </nav>

            <?php
            session_start();
            $b=$_SESSION['p'];
            $con=mysqli_connect('localhost','root','seedit','phonebook');
            $q="select*from info where name='$b'";
            $result=mysqli_query($con,$q);
           
            while($row=mysqli_fetch_array($result))
            {
                echo"
                  Name     $row[name]
                  Address  $row[address]
                  PhoneNo.         $row[phonenumber]";
              }
           

       ?>
        </body>
</html>