<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles css-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <!-- Styles js-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <style type="text/css">
            body
            {
                background-image: url(../public/imagenes/fondo.jpg);
                background-size:cover;
            }
        </style>

        
    </head>
    <body>
        
        <div class="container">

            {!! Form::open(['url' => 'registrarDeporte']) !!}
            
            <center>
            <h1 class="text-light">Ingresar Deporte</h1>
            </center>

            <br>

            <div class="row">
                <div class="col-sm">
                    <label class="text-light">Deporte</label>
                    <input type="text" class="form-control" name="deporte" placeholder="deporte...">             
                </div>
                <div class="col-sm">
                    <label class="text-light">Padre</label>
                    <input type="text" class="form-control" name="padre" placeholder="padre...">             
                </div>
                <div class="col-sm">
                    <label class="text-light">Descripcion</label>
                    <textarea class="form-control" name="descripcion" rows="1"></textarea>        
                </div>
            </div>

            <br>

            <button type="submit" class="btn btn-primary">Añadir</button>

            {!! Form::close() !!}
            <h3><a href="/deportes/public/listadoDeportes">Lista de deportes</a></h3>
        </div>

        <!--CONTENEDOR-->
        <div class="container">
            @yield('content')
        </div>
        
        
    </body>
</html>
