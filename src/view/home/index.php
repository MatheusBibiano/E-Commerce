<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../../../assets/img/icone.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../css/index/main.css" />
    <title>Loja | Home</title>
</head>

<body>
    <?php
        require_once "./header.php";
    ?>

    <script>
        const focus = document.getElementById("home-menu");
        focus.style.cssText = 'border-bottom: 3px solid #ffc400;';
    </script>

    <main>
        <div class="container-fluid">
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                </ol>
    
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../../../assets/img/store.jpg" alt="Banner1" class="d-block w-100" />
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Confira as maiores tendências de 2021!</h2>
                            <a href="./login.php" class="main-btn">Ir às compras</a>
                        </div>
                    </div>
    
                    <div class="carousel-item">
                        <img src="../../../assets/img/store2.jpg" alt="Banner2" class="d-block w-100" />
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Promoções exclusivas para você!</h2>
                            <a href="./login.php" class="main-btn">Ir às compras</a>
                        </div>
                    </div>
                </div>
    
                <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </main>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-auto m-5 p-4 border about-container">
                <h3 class="about-title">Contato</h3>
                <p>
                    <i class="fa fa-phone m-1"></i>
                    <span class="contact-tile">
                    Ligue para:
                    </span>
                    (35) 99999-9999
                </p>

                <p>
                    <i class="fa fa-envelope m-1"></i>
                    <span class="contact-tile">
                    Envie um e-mail:
                    </span>
                    loja@exemplo.com
                </p>
            </div>
            <div class="col-md-auto m-5 p-4 border about-container">
                <h3 class="about-title">Redes sociais</h3>
                <p>
                    <i class="fa fa-facebook-official social-icon"></i>
                    <span class="social-tile">Loja</span>
                </p>
                <p>
                    <i class="fa fa-instagram social-icon"></i>
                    <span class="social-tile">Loja</span>
                </p>
                <p>
                    <i class="fa fa-pinterest-square social-icon"></i>
                    <span class="social-tile">Loja</span>
                </p>
            </div>
        </div>
    </div>

    <?php
        require_once "./footer.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>