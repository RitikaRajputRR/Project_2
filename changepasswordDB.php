<html>
    <head>
        <title>
        changepassword database
        </title>
    </head>
    <body>
        <?php
        $a=$_GET['t1'];
        $b=$_GET['t2'];
        $c=$_GET['t3'];
        $con=mysqli_connect('localhost','root','seedit','phonebook');
        $q="update info set password='$b' where password='$a'" ;
        $result=mysqli_query($con,$q);
        if($b!=$c)
        {
            echo"password unmatched"; 
        }
        else{
            echo "Updated";
            echo"<script>window.location='profile.php'</script>";
        }
        
        ?>
    </body>
</html>