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
            <a class="nav-link active" href="{{ url('/pagos') }}">Pagos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/inversiones') }}">Inversiones</a>
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
        <h1 class="display-4">Pago de Servicios</h1>
        <hr class="my-4">
    </div>
    <br>
    <br>
    <div class="container">
        <form method="POST" action="#">
            <div id="show-serv-control">
                <div class="form-group row">
                    <div class="form-group col-md-6">
                        <label for="nuevo-serv-buscar">Nuevo Servicio</label>
                        <input type="text" class="form-control" id="nuevo-serv-buscar" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nuevo-serv-cuenta">N° de Cliente / Cuenta</label>
                        <input type="text" class="form-control" id="nuevo-serv-cuenta" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-light">Agregar</button>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="">Mis Servicios</label>
                <select class="form-control" id="select-serv" name="select-serv" required>
                    <option class="starter-select"></option>
                    <option>Edenor</option>
                    <option>Metrogas</option>
                    <option>Cablevision</option>
                    <option>Movistar</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="">Referencia</label>
                <input type="text" class="form-control" id="ref" name="ref" placeholder="" required>
            </div>
            <div class="form-group">
                <label class="form-check-label" for="exampleCheck1">Importe</label>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="" required>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Pagar</button>
            <button type="reset" class="btn btn-danger">Volver</button>
        </form>

        <br>
        <br>

        <h2 class="text-center">
            <button class="btn btn-link" type="button">
                Ultimos Servicios
            </button>
        </h2>
        <br>
        <div class="list-group">
            <?php
                if(isset($_POST["ref"]) && isset($_POST["amount"]) && isset($_POST["select-serv"])){
                    $reference = $_POST["ref"];
                    $amounts = $_POST["amount"];
                    $company = $_POST["select-serv"];
                    $saved = [];
                    
                    if(empty($reference) || empty($amounts) || $company == ""){
                        echo
                            "<div class='alert alert-warning' role='alert'>
                                Debes completar todos los campos
                            </div>";
                    }else{
                        if((is_numeric($reference) && $reference > 0 ) &&
                            (is_numeric($amounts) && $amounts > 0))
                        {
                            array_push($saved, array(
                                    "company" => $company,
                                    "ref" => $reference,
                                    "amount" => $amounts));
                            echo
                                "<a href='#' class='list-group-item list-group-item-action'>
                                    <div class='d-flex w-100 justify-content-between'>
                                        <h5 class='mb-1'>" . $saved[0]['company'] . "</h5>
                                        <small class='text-muted'>3 days ago</small>
                                    </div>
                                    <p class='mb-1'>Referencia N°" . $saved[0]['ref'] . "<br>Monto $". $saved[0]['amount'] . "</p>
                                </a>";
                        }else{
                            echo
                                "<div class='alert alert-warning' role='alert'>
                                    Revisa todos los campos
                                </div>";
                        };
                    };            
                };
            ?>
        </div>
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