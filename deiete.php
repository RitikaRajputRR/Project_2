<html>
    <head>
        <title>
            delete user
        </title>
    </head>
    <body>
        <?php
        $n=$_GET['id'];
        $con = mysqli_connect("localhost", "root", "seedit", "phonebook1");
        $q = "delete  from profile where name='$n'";
        $result=mysqli_query($con,$q);
        if($result)
        {
            echo"delete";
        }
        else{
            echo"error";
                }
        ?>
    </body>
</html>