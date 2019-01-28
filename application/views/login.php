<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2>Login</h2>
    <form action="<?php echo base_url('c_login/login') ?>" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="namaPengguna"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="kataKunci"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Login"></td>    
            </tr>
        </table>
    </form>
    
</body>
</html>