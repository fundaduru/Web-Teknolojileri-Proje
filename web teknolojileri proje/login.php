<html>

<head>
    <title>Memleketim</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php

    $_SESSION["girisSayisi"] = 0;
    $_SESSION["girisBilgisi"] = false;
    session_start();
    if (isset($_POST["giris"])) {

        $_SESSION["_kullaniciAdi"] = $_POST["kullaniciAdi"];
        $_SESSION["_sifre"] = $_POST["sifre"];

        if ($_SESSION["_kullaniciAdi"] == "b181210038@sakarya.edu.tr" && $_SESSION["_sifre"] == "12345") {
            $_SESSION["girisBilgisi"] = true;
            $_SESSION["girisSayisi"]++;
            header('location: homepage.php');
        } else {
            header("location: login.php");
        }
    }


    ?>

    <style>
        body {
            padding: 0;
        }

        .login-center {
            padding: 16px 32px;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <div class="row login-center">
        <div class="col-lg-3 col-md-6 col-sm-9 col-xs-12">

            <div class="card">
                <div class="card-header bg-danger text-white">
                    Login
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <input class="form-control" type="text" required autocomplete="off" placeholder="Kullanıcı Adı" name="kullaniciAdi">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" required autocomplete="off" placeholder="Şifre" name="sifre">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-sm btn-danger w-100" type="submit" name="giris">Giriş Yap</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>