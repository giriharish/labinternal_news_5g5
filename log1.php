<html>
        <body>
        <h1>LOGIN</h1>
        <link rel="stylesheet" type="text/css" href="style.css">
        <form action='res.php'>
                UserName: <input type='text'> <br> <br>
                Password: <input type='password'> <br> <br>
                <input type='submit' value ="Click here to login">
                
                 </form>
                 <form action='register1.php'>
                <input type='submit' value="click here to register">
                </form> 
        </body>
       
</html>
<?php
      $con=mysqli_connect("localhost","root","vishnu123","proweb");
      
?>
