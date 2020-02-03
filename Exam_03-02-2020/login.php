<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Login Page</title>


    <?php require_once "indexDatabase.php"  ?>
</head>
<body>
    <div class="main">
        <div class="col-md-12" >
                <h3 class="text-center">Login</h3>
                <form action="login.php" method="POST" style>
                    <div name='login[]'>
                       <label for="email">Email</label><br>
                       <input type="email" name="login[email]"><br><br>
                    
                        <label for="email">Password</label><br>
                        <input type="password" name="login[password]"><br><br>

                        <div >
                            <input type="submit" value="Login" name="loginbtn" 
                                    class="btn btn-primary">
                            <a href="register.php"><input type="button"
                             value="Register" name="register" id="register"
                                 class="btn btn-primary" 
                                  onclick="window.location.href='register.php' " ></a>
                        </div>
                    </div>
                </form>
        
        </div>
    </div>
    
    <style>
        .main{
            text-align : center;
        }
     

    </style>
    
</body>
</html>