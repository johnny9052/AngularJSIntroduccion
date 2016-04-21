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
        <script src="../Recursos/js/angular/angular.min.js" type="text/javascript"></script>
    </head>
    <body>
        <!-- ng-app: Aplicacion angular   ng-model: Modelo angular -->
        <div ng-app>
            <label>Ingrese nombre:</label>
            <input type="text" placeholder="Escribe tu nombre" ng-model="nombre">
            <!--Ingresa danger, info, success, warning -->
            <input type="text" placeholder="Escribe tu color" ng-model="color">
            <br>
            <!-- Lo que se actualiza en el modelo, se refleja en la vista-->
            <!-- {{ Expresion angular }} , y el nombre hace referencia al modelo -->
            <h1 class="text-danger">{{nombre}}</h1>
            <h1 class="text-{{color}}">{{nombre}}</h1>
        </div>
    </body>
</html>
