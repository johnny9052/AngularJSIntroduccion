<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>       
        <meta charset="UTF-8">
        <title></title>
        <link href="../Recursos/js/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../Recursos/js/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="../Recursos/js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>        
        <script src="../Recursos/js/angular/angular.min.js" type="text/javascript"></script>

        <!-- ARCHIVO NECESARIO PARA EL MASTER PAGE -->
        <script src="../Recursos/js/angular/route.js" type="text/javascript"></script>

        <!-- Implementacion -->
        <script src="../Recursos/js/General/rutas.js" type="text/javascript"></script>
        <script src="../Recursos/js/General/rutasEmpleados.js" type="text/javascript"></script>
        <script src="../Recursos/js/General/rutasTareas.js" type="text/javascript"></script>
        
        
    </head>
    <body ng-app="appRutas">
        <!-- URL del archivo de la ruta  https://code.angularjs.org/1.5.5/angular-route.min.js -->

        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" 
                        data-toggle="collapse" 
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Desplegar navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#/">Menu</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- Con esta estructura se define que la URL sera cargada
                    con el ng-route -->
                    <li><a href="#/empleados/">Empleados</a></li>
                    <li><a href="#/tareas/">Tareas</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <!-- Seccion donde se actualizara el contenido definido en el route, 
        especificado con ng-view -->
        <div class="container">
            <div ng-view>

            </div>
        </div>

    </body>
</html>
