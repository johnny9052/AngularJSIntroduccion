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

        <!-- ARCHIVOS MINIMOS NECESARIOS DEL BOWER -->
        <link href="../Dependecias/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../Dependecias/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="../Dependecias/bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../Dependecias/bower_components/angular/angular.min.js" type="text/javascript"></script>

        <!-- DEPENDENCIAS ADICIONALES ANGULAR -->        
        <!-- ARCHIVO NECESARIO PARA EL MASTER PAGE -->
        <!-- PERMITE HACER EL ENRUTAMIENTO DE URL'S -->
        <script src="../Dependecias/bower_components/angular-route/angular-route.min.js" type="text/javascript"></script>


        <!-- ARCHIVOS PROPIOS -->
        <script src="../Recursos/js/General/appMasterPage.js" type="text/javascript"></script>


        <!-- ARCHIVOS DEL LOGIN-->
        <script src="../Recursos/js/General/logIn/logInCtl.js" type="text/javascript"></script>
        <script src="../Recursos/js/General/logIn/logInSer.js" type="text/javascript"></script>
    </head>

    <body ng-app="appMasterPage" ng-controller="CtlValidate" ng-show="sesion">

        <!-- MENU -->        
        <div ng-include="'template/menu.php'"></div>
        <!-- END MENU -->

        <hr>

        ENTRASTE AL SISTEMA!

    </body>


</html>
