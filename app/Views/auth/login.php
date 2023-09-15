<!DOCTYPE html>
<html>

<head>
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/auth/css/style.css' ?>" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <img class="wave" src="<?php echo base_url('assets/auth/img/login-bg.png') ?>" />
    <div class="container">
        <div class="img"></div>
        <div class="login-content">
            <form action="<?php echo site_url('auth/process') ?>" method="post">
                <h2 class="title">LOGIN</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" class="input" placeholder="Username " name="username" />
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" class="input" placeholder="Password" name="password"/>
                    </div>
                </div>
                <a href="<?php echo site_url('register') ?>">Belum punya akun? Daftar disini!</a>
                <input type="submit" class="btn" value="Login" />
            </form>
        </div>
    </div>
</body>

</html>