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
    <ul class="nav nav-tabs navbar-dark bg-dark">
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pagos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Inversiones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">balance</a>
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
        <h1 class="display-4">Balance Financiero</h1>
        <hr class="my-4">
    </div>

    <br>
    <br>
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Importe</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    class Transaccion{
                        
                        public $fecha;
                        public $monto;
                        public $descripcion;

                        public function __construct($fecha, $monto, $descripcion){
                            $this->fecha = $fecha;
                            $this->monto = $monto;
                            $this->descripcion = $descripcion;
                        }
                    }

                    $nuevaOp1 = new Transaccion("19/06/2019", 1000, "Deposito");
                    $nuevaOp2 = new Transaccion("20/06/2019",-500,"Cable");
                    $nuevaOp3 = new Transaccion("22/06/2019",-200,"Movistar");
                    $nuevaOp4 = new Transaccion("25/06/2019",100,"Deposito");

                    $listaTransaccion = [];

                    array_push($listaTransaccion,$nuevaOp1,$nuevaOp2,$nuevaOp3 ,$nuevaOp4);
    
                    for($i=0; $i<count($listaTransaccion);$i++){
                        echo "<tr>
                            <th scope='row'>". $listaTransaccion[$i]->fecha. "</th>
                            <td>" . $listaTransaccion[$i]->descripcion. "</td>
                            <td>" . $listaTransaccion[$i]->monto . "</td>
                            </tr>";
                    }                 
                ?>
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg">Descarga</button>
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