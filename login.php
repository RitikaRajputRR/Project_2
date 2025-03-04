<html>
    <head>
        <title>
            login page
        </title>
        <style>
            .colour{
                background-image: linear-gradient(lightgreen,darkgreen);
            }
            .box{
                width: 500px;
                height: 350px;
                margin-top: 200px;
                margin-left: 500px;
                background-color: rgba(0, 128, 0, 0.633);
                box-shadow: 0 0 4px white;
            }
            .lo{
                font-size: 50px;
                font-weight: bold;
                text-align: center;
                color: skyblue;
                 margin-top:20px ;
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
                margin-left: 10px;
                background-color: white;
            }
           .lob{
                
                margin-left: 150px;
                width: 200px;
                height: 50px;
                background-color: cadetblue;
                color: white;
                font-size: 20px;
                font-weight: bold;
                text-shadow: 0 0 4px black;

           }
           .b1{
            color: skyblue;
            margin-top: 30px;
            text-align: center;

           }
          .b2{
            color: white;
          }
        </style>
    </head>
    <body class="colour">
        <form action="logindbpage.php">
       <div class="box">
        <p class="lo">Login</p>
       <p class="l1"> Username:<span><input type="text" placeholder="username" class="a1" name="t1"></span></p>
       <p class="l1"> Password:<span><input type="text" placeholder="password" class="a1" name="t2"></span></p>
       <input type="submit" value="Login" class="lob">
       <p class="b1">Not a remember yet?Register<span class="b2">Here</span></p>
       </div>
    </form>
    <a href="phonebookpage.php"></a> 
    </body>
</html>
