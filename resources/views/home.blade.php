<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/app.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="../image/logo.png" width="30" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Online-Bank</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ayuda</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="jumbotron">
        <div class="text-center">
            <h1 class="display-4">Bienvenido a tu Homebanking</h1>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-3">
                <div class="card card_padding">
                    <img src="./image/bank.png" class="card-img-top img_size" alt="...">
                    <div class="card-body">
                        <a href="#" class="">
                            <h5 class="card-title">Pagos</h5>
                        </a>
                        <p class="card-text">Gestiona todos tus pagos desde donde estes!</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card card_padding">
                    <img src="./image/bank2.png" class="card-img-top img_size" alt="...">
                    <div class="card-body">
                        <a href="#" class="">
                            <h5 class="card-title">Inversiones</h5>
                        </a>
                        <p class="card-text">Checkea las acciones al instante</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card card_padding">
                    <img src="./image/bank3.png" class="card-img-top img_size" alt="...">
                    <div class="card-body">
                        <a href="#" class="">
                            <h5 class="card-title">Balance</h5>
                        </a>
                        <p class="card-text">Mantene el control de tus gastos de forma sencilla</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div>
        <h1>
            <?php
            ?>
        </h1>
    </div>
    <footer>
        <ul class="nav navbar-dark bg-dark justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="#">Tel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Correo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Facebook</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Up</a>
            </li>
        </ul>
    </footer>
</body>

</html>