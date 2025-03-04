<html>
    <head>
        <title>
            change password
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
                .box2{
                width: 500px;
                height: 400px;
                margin-top: 20px;
                margin-left: 500px;
                box-shadow: 0 0 4px white;
            }
            .user{
                font-size: 40px;
                font-weight: bold;
                text-align: center;
                color: skyblue;
                text-shadow: 0 0 4px black;
            }
            .l1{
                margin-top:10px ;
               margin-left: 20px;
                color: skyblue;
                font-size: 20px;
                font-weight: bold;
            }
            .a1{
                width: 300px;
                height: 40px;
                margin-left:10px;
                background-color: white;
            }
            .change{
               
                width: 200px;
                height: 50px;
                background-color: cadetblue;
                color: white;
                font-size: 20px;
                font-weight: bold;
                align-items: center;
                text-shadow: 0 0 4px black;
                margin-left: 120px;
                margin-top: 20px;
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
            <form action="changepasswordDB.php">
            <div class="box2">
                
            <p class="user">Change password </p>
            <p class="l1">Old password<span><input type="text" class="a1" name="t1"></span></p>
            <p class="l1">New password<span><input type="text" class="a1" name="t2"></span></p>
            <p class="l1">conform New password<span><input type="text" class="a1" name="t3"></span></p>
            <input type="submit" value="CHANGE" class="change">
        </div>
    
            </form>
        </body>
</html>
   