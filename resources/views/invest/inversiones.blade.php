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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <ul class="nav nav-tabs navbar-dark bg-dark">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/pagos') }}">Pagos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{ url('/inversiones') }}">Inversiones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/balance') }}">balance</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Ayuda</a>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Cuenta</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </li>
    </ul>

    <div class="text-center">
        <h1 class="display-4">Inversiones</h1>
        <hr class="my-4">
    </div>
    <br>
    <br>
    <div class="container">
        <table class="table table-borderless table-dark" id="invest-table">
            <thead>
                <tr>
                    <th scope="col">Empresa</th>
                    <th scope="col">Acciones</th>
                    <th scope="col">Valor x Accion</th>
                    <th scope="col" class="float-right">Gestionar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Arcor</td>
                    <td>1000</td>
                    <td>200</td>
                    <td>
                        <div class="form-group float-right">
                            <button type="button" class="btn btn-success">Vender</button>
                            <button type="button" class="btn btn-primary">Comprar</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
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