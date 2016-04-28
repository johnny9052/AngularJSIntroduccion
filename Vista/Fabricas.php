<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>        
        <link href="../Recursos/js/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!--        <link href="../Recursos/css/filtro.css" rel="stylesheet" type="text/css"/>        -->
        <script src="../Recursos/js/angular/angular.min.js" type="text/javascript"></script>
        <!-- ARCHIVO DE INTERNACIONALIZACION "VER FILE PARA URL" -->        
        <script src="../Recursos/js/General/fabrica.js" type="text/javascript"></script>
    </head>
    <body ng-app="appControladorFiltro">
        <div class="container">
           
            <br>
            
            <div ng-controller="ControladorUno">
                <input type="text" size="50" ng-model="nuevoMensaje">
                <button class="btn btn-success" ng-click="nuevo()">Guardar</button>
                <h3 class="text-info">{{dato.mensaje}}</h3>
            </div>
            
            <hr>    

            <div ng-controller="ControladorDos">
                <input type="text" size="50" ng-model="nuevoMensaje">
                <button class="btn btn-success" ng-click="nuevo()">Guardar</button>
                <h3 class="text-warning ">{{dato.mensaje}}</h3>
            </div>

            <hr>
            
            <div ng-controller="ControladorTres">
                <button class="btn btn-primary" ng-click="resetear()">Mensaje Inicial</button>
            </div>
        </div>
    </div>
    
</body>
</html>