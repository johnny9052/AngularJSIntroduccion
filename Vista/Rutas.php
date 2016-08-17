<!DOCTYPE html>
<html>
    <head>
        <title>Controladoeres</title>        
        <link href="../Recursos/js/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../Recursos/css/listadetareas.css">
        <script src="../Recursos/js/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="../Recursos/js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../Recursos/js/angular/angular.min.js" type="text/javascript"></script>

        <!-- Archivo necesario para el enrutamiento-->
        <script src="../Recursos/js/angular/route.js" type="text/javascript"></script>        

        <script src="../Recursos/js/General/rutas.js"></script>
    </head>
    <body ng-app="miAp">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!-- Boton para el menu movil -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" 
                        data-target="#bs-example-navbar-collapse-1">
<!--                    <span class="sr-only">Desplegar navegacion</span>-->
                    <!-- Lineas del boton para desplegar menu movil -->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#/">Menu</a>
            </div>

            <!-- MENU DE OPCIONES -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#/empleados/">Empleados</a></li>
                    <li><a href="#/tareas/">Tareas</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <div class="container">           
            <!-- DONDE SE VISUALIZARA EL CONTENIDO DE LA MASTER PAGE -->
            <div ng-view></div>

        </div>
    </body>
</html>