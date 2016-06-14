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
        <link rel="stylesheet" href="../Recursos/css/listadetareas.css">
        <script src="../Recursos/js/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="../Recursos/js/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../Recursos/js/angular/angular.min.js" type="text/javascript"></script>
        <script src="../Recursos/js/angular/route.js" type="text/javascript"></script>        
<!--        <script src="http://code.angularjs.org/1.3.14/i18n/angular-locale_es-es.js"></script>-->

        
        <script src="../Recursos/bower_components/angular-animate/angular-animate.min.js" type="text/javascript"></script>
        <script src="../Recursos/bower_components/angular-cookies/angular-cookies.min.js" type="text/javascript"></script>
        <script src="../Recursos/bower_components/angular-resource/angular-resource.js" type="text/javascript"></script>
        
        
        <script src="../Recursos/js/General/LogIn_Rutas.js" type="text/javascript"></script>
    </head>
    <body ng-app="miAp">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Desplegar navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Menu</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#/empleados/">Empleados</a></li>
                    <li><a href="#/tareas/">Tareas</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <div class="container">
            <a class="btn btn-lg btn-warning" href="https://www.youtube.com/watch?v=l25VkqsvkfY" target="_blank">
                ir al Video-Tutorial
            </a>

            <div ng-view></div>

        </div>
    </body>
</html>
