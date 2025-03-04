<html>

<head>
    <title>
        view all page
    </title>
    <style>
        .colour {
            background-image: linear-gradient(lightgreen, darkgreen);
        }

        .a {
            font-size: 50px;
            font-weight: bold;
            text-align: center;
            color: skyblue;
            margin-top: 50px;
            text-shadow: 0 0 4px black;
        }

        nav {
            width: 850px;
                margin-top: 30px;
                margin-left: 330px;
                height:80px;
                border-radius:10px ;
                background-color: cadetblue;
        }

        nav li {
            display: inline-block;
            padding: 25px 30px;
        }

        nav li:hover {
            background-color: orange;

        }

        nav a {
            color: black;
            text-decoration: none;
            font-size: 30px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        table{
            margin-left: auto;
            margin-right: auto;
            width: 700px;
            height: 40px;
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
        <li><A href="contactus.php">Contact us</A></li>
    </nav>

    <?php
    $con = mysqli_connect("localhost", "root", "seedit", "phonebook1");
    $q = "select * from profile";
    $result = mysqli_query($con, $q);
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"<table border=1 ><tr>
    <td>Name</td><td>Designation</td><td>Phone567l</td><td>Address</td>
    <td colspan=2>Action</td>
    </tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo " 
                <tr>
                <td>$row[name]</td>
                <td>$row[Designation]</td>
                <td>$row[phoneno]</td>
                <td>$row[adress]</td>
                <td><a href='deiete.php?id=$row[name]'><input type='button' value='Delete'></td>
                <td><a href='updateuser.php?id=$row[name]'><input type='button' value='Edit'></a></td>
                
                </tr> ";
            
    }


    ?>



    </bod>

</html>