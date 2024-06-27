<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="assets/img/lock.svg" rel="icon">
    <link rel="stylesheet" href="assets/css/login.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-login">
        <div class="card" data-aos="fade-left" data-aos-delay="500">
            <div class="card-headerr">
                <h1>Login</h1>
            </div>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name" class="form-label">Email</label>
                    <input type="text" class="form-control" id="name" name="name" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button class="form-button" type="button" id="login">Login</button>
            </form>
            <small class="bwh-button">Belum Punya akun <span class="masuk"><a href="<?php echo base_url('/register') ?>">Daftar Disini</a></span></small>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('login').addEventListener('click', function() {
            window.location.href = '/home';
        });
    </script>
</body>

</html>