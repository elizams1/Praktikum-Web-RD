<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>percobaan m8</title>
    <style>
        body{
            background-color: #d5f0f3;
        }
        .bucket{
            width: 25vw;
            background-color: white;
            margin: 25vh auto;
            padding: 25px;
            font-size: 12pt;
            box-shadow: 10px 10px 5px grey;
        }
        .bucket p{
            text-align: center;
            text-transform: uppercase;
        }
        
        .login-field{
            box-sizing: border-box;    
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
        }
        .login-btn-submit{
            background-color: #46de4b;
            color: white;
            font-size: 12pt;
            width: 100%;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <?php //echo 1/0; ?>
    <div class="bucket">
        <p>Login For Continue </p>
        <form action="login.php" method="post" class="login">
            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname" placeholder="Username..." class="login-field">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="Pasword..." class="login-field">
            <input type="submit" name="login" value="Login" class="login-btn-submit">
        </form>
    </div>
</body>
</html>