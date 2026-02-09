<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .login-box {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
        }
        input, button {
            width: 95%;
            padding: 8px;
            margin-top: 10px;
            border: 1px solid #ccc;
        }
        button {
            background: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
            display: block;
            width: 90%;
            margin-left: 20px;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h3 align="center">Login</h3>
    <form method="post" action="proses_login.php">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button  style="background-color: green;" type="submit" name="login">Login</button>
    </form>
</div>

</body>
</html>
