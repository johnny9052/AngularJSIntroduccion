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
        <link href="../Recursos/css/filtro.css" rel="stylesheet" type="text/css"/>        
        <script src="../Recursos/js/angular/angular.min.js" type="text/javascript"></script>
        <script src="../Recursos/js/General/controlador.js" type="text/javascript"></script>
    </head>
    <body ng-app="appControladorTareas">
        <!-- ng-app: Aplicacion angular   ng-model: Modelo angular -->
        <div ng-controller="ControladorTareas">
            <h1>{{tareas[0].texto}}</h1>
        </div>

        <!-- Recorrer el listado de tareas, e insertar code por cada una -->
        <div ng-controller="ControladorTareas">

            <!--Muestra el total de tareas-->
            <h1>{{contarTareasRestantes()}} de {{tareas.length}}</h1>
            <button class="btn btn-danger" type="button" 
                    ng-click="eliminarTareasRealizadas()">Eliminar tareas realizadas</button>
            <br>
            <br>


            <ul>
                <!-- Recorre el listado de tareas, y por cada elemento incrusta
                el codigo que se encuentra dentro del LI-->
                <li ng-repeat="obj in tareas">
                    <label class="hecho-{{obj.hecho}}">{{obj.texto}}</label>
                    <input type="checkbox" ng-model="obj.hecho">                                        
                </li>
            </ul>  


            <form ng-submit="agregarTarea()">
                <input type="text" size="30" placeholder="Agregar una nueva tarea"
                       ng-model="txtNuevaTarea">
                <button class="btn btn-primary" type="submit">Agregar</button>
            </form>
        </div>       
    </body>
</html>
