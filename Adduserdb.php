<html>
    <head>
        <title>
            Adduser database
        </title>
    </head>
    <body>
        <?php
        $c=$_GET['t3'];
        $d=$_GET['t4'];
        $e=$_GET['t5'];
        $f=$_GET['t6'];
        
        $con=mysqli_connect('localhost','root','seedit','phonebook1');
       echo $q="insert into profile values('$c','$d','$e','$f')";
        $r=mysqli_query($con,$q);
        if($r){
            echo"  <script>window.location='Add new.php' </script>";
        }
         else{
        echo"
        <h1>error</h1>";
         }
    
        ?>
    

    </body>
</html>