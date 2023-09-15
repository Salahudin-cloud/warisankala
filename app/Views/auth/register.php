
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/auth/css/style.css' ?>" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <div class="container-login">
        <img src="<?php echo base_url('assets/auth/img/logo-regis.svg') ?>" />
        <form action="<?php echo site_url('register/process') ?>" method="post">
            <div class="regis">
                <div class="input-div  input-div-reg username">
                    <div class="div">
                        <input type="text" class="input" placeholder="Username " name="username" autocomplete="123" />
                    </div>
                </div>
                <div class="input-div  input-div-reg password">
                    <div class="div">
                        <input type="password" class="input" placeholder="Password" name="password" />
                    </div>
                </div>
            </div>
            <input type="submit" class="btn" value="register" />
            <a href="<?php echo site_url('/') ?>" class="back-btn">Back</a>
        </form>

    </div>
</body>

</html>