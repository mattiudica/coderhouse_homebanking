<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Vista Padre</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
    <div class="jumbotron text-center">
            <h1 class="display-4">{{$titlePage}}</h1>
    </div>
    <br>
    <br>
        <div class="container">
            @yield('content')
        </div>
    <br>
    <br>
    <br>
    <br>
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