<html>
    <head>
        <title>
            loginpage ka database
        </title>
    </head>
    <body>
        
    <?php
    $a=$_GET['t1'];
    $b=$_GET['t2'];
    $con=mysqli_connect('localhost','root','seedit','phonebook');
    echo $q="select * from info where name='$a' and password='$b'";
    $result=mysqli_query($con,$q);
    if($row=mysqli_fetch_array($result))
    {
        session_start();
        $_SESSION['p']=$a;
        echo"  <script>window.location='phonebookpage.php' </script>";
    }
     else{
    echo"
    <h1>error</h1>";
     }

    ?>

    </body>
    
</html>