<html>
    <head>
        <title>
            update user page
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
                margin-left: 30px;
                color: skyblue;
                font-size: 20px;
                font-weight: bold;
            }
            .a1{
                width: 300px;
                height: 40px;
                margin-left: 40px;
                background-color: white;
            }
            .add{
                margin-left: 150px;
                width: 200px;
                height: 50px;
                background-color: cadetblue;
                color: white;
                font-size: 20px;
                font-weight: bold;
                text-shadow: 0 0 4px black;

           
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
      

        <?php
        $a=$_GET['id'];
        
    $con = mysqli_connect("localhost", "root", "seedit", "phonebook1");
    echo $q = "select * from profile where name='$a'";
    $result = mysqli_query($con, $q);
    while($row=mysqli_fetch_array($result))
      {
            echo"<form action='save.php'><div class='box2'>
            <p>Update User</p>
            <p class='l1'>Name<span><input type='text' name='t1' class='a1' value=$row[name]></span></p>
            <p class='l1'>Designation<span><input type='text'  name='t2'class='a1' value='$row[Designation]'></span></p>
            <p class='l1'>phone<span><input type='text'  name='t3'class='a1'></span></p>
            <p class='l1'>Address<span><input type='text' name='t4' class='a1'></span></p>
            <input type='submit' value='Update' class='add'>
            </div>
            </form>";
}
    ?>
        </body>
</html>