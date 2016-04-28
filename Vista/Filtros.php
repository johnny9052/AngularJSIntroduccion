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
        <!-- ARCHIVO DE INTERNACIONALIZACION "VER FILE PARA URL" -->
        <script src="../Recursos/js/angular/internacionalizacion.js" type="text/javascript"></script>
        <script src="../Recursos/js/General/filtro.js" type="text/javascript"></script>
    </head>
    <body ng-app="appControladorFiltro">
        <br>        
        <div class="container" ng-controller="ControladorFiltro">
            <!-- INICIO DEL PANEL O DEL FORMULARIO -->
            <div class="panel panel-primary">

                <!-- CABECERA QUE CONTENDRA EL INPUT DE BUSQUEDA DE LOS DATOS -->
                <div class="panel-heading">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-search"></i>
                        </span>
                        <input type="text" class="form-control" 
                               placeholder="Buscar empleado" ng-model="buscar">
                        <!-- si el modelo fuera ng-model="buscar.nombre" solo 
                        el filtro utilizado buscaria en el nombre-->
                    </div>                                            
                </div>

                <!-- REGISTROS DE LA TABLA -->
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="seleccionable"> 
                                    <a ng-click="ordenarPor('nombre')">Nombres</a>
                                    <!-- -nombre (Mandando el menos por parametro
                                    lo ordena de manera descendente) -->
                                    <a class="caret" ng-click="ordenarPor('-nombre')"></a>
                                </th>
                                <th class="seleccionable"> 
                                    <a ng-click="ordenarPor('primerApellido')">Primer apellido</a>
                                    <a class="caret" ng-click="ordenarPor('-primerApellido')"></a>
                                </th>
                                <th class="seleccionable"> 
                                    <a ng-click="ordenarPor('segundoApellido')">Segundo apellido</a>
                                    <a class="caret" ng-click="ordenarPor('-segundoApellido')"></a>
                                </th>
                                <th class="seleccionable"> 
                                    <a ng-click="ordenarPor('fecha')">Fecha ingreso</a>
                                    <a class="caret" ng-click="ordenarPor('-fecha')"></a>
                                </th>
                                <th class="seleccionable"> 
                                    <a ng-click="ordenarPor('salario')">Salario</a>
                                    <a class="caret" ng-click="ordenarPor('-salario')"></a>
                                </th>                                                                                                                                                                                              
                                <th class="seleccionable"> 
                                    <a ng-click="ordenarPor('telefono')">Telefono</a>
                                    <a class="caret" ng-click="ordenarPor('-telefono')"></a>
                                </th>
                                <th class="seleccionable"> 
                                    <a ng-click="ordenarPor('bono')">% Bonificacion</a>
                                    <a class="caret" ng-click="ordenarPor('-bono')"></a>
                                </th>                                                                                                                                                                                              
                            </tr>
                        </thead>    

                        <tbody>
                            <!-- | orderBy:nombreAtributo Filtro angular para 
                            ordenar los elementos recorridos con el ciclo, 
                            donde el atributo debe tener asignado el nombre
                            del atributo por el cual se quiere ordenar-->
                            
                            <!-- El filter:nombreModelo filtra automaticamente 
                            los datos a partir del valor del modelo-->
                            <tr ng-repeat="obj in empleados| orderBy:ordenSeleccionado | filter:buscar">
                                <!-- | uppercase (coloca el texto en mayuscula) --> 
                                <!-- | date (Organiza la fecha que da js) --> 
                                <td>{{obj.nombre| uppercase}}</td>
                                <td>{{obj.primerApellido| uppercase}}</td>
                                <td>{{obj.segundoApellido| uppercase}}</td>
                                <td>{{obj.fecha| date:'fullDate'}} a las 
                                    {{obj.fecha| date:'h:mm a'}}</td> 
                                <!-- obj.fecha| date}} -->
                                <td>{{obj.salario|currency}}</td>
                                <td>{{obj.telefono}}</td>
                                <td>{{obj.bono| number:2}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </body>
</html>
