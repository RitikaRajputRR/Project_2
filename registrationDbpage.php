<html>
    <head>
        <title>
            Registration database page.
        </title>
</head>
<body>
    <?php
    $a=$_GET['t1'];
    $b=$_GET['t2'];
    $c=$_GET['t3'];
    $d=$_GET['t4'];
    $e=$_GET['t5'];
    
    $con=mysqli_connect('localhost','root','seedit','phonebook');
   echo $q="insert into info values ('$a','$b','$c','$d','$e')";
    $result=mysqli_query($con,$q);
    if($result)

    {
       
        echo"<script> window.location='login.php'</script>";

    }
    else{
        echo"error";
    }
    ?>
</body>
</html>