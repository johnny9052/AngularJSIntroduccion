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
        <script src="../Recursos/js/General/directiva.js" type="text/javascript"></script>
    </head>
    <body ng-app="appDirectivaSimple">

        <div ng-controller="ControllerEncabezado">
            <div class="container">
                <!-- Este tema no es relevante-->
                <!-- Como atributo -->
                <!--<div di-encabezado></div>-->
                
                
                <!-- Como elemento -->
                <di-encabezado texto="texto1"></di-encabezado>                
                <di-encabezado texto="texto2"></di-encabezado>
                
                <di-encabezado></di-encabezado>
            </div>    
        </div>        
    </body>
</html>
