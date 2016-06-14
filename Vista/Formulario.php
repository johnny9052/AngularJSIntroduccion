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
        <!--        <link href="../Recursos/css/filtro.css" rel="stylesheet" type="text/css"/>        -->
        <script src="../Recursos/js/angular/angular.min.js" type="text/javascript"></script>
        <script src="../Recursos/js/General/formulario.js" type="text/javascript"></script>
    </head>
    <body ng-app="">
        <br>
        <form role="form" name="formulario">
            <!-- ng-class(aplica una clase si se cumple la condicion) -->
            <!-- form-group clase bootstrap para encerrar subforms -->
            <div class="form-group"  
                 <!-- Si es invalido, marquelo con has-error, si es valido 
                 marquelo con has-success -->
                 ng-class="{'has-error':formulario.txtNombre.$invalid, 'has-success' : formulario.txtNombre.$valid}">
                 <label for="txtNombre">
                    Nombre
                </label>

                <input id="txtNombre" type="text" class="form-control" 
                       placeholder="Ingrese nombre" name="txtNombre" 
                       ng-model="usuario.nombre" required>
            </div>

            <!-- form-group clase bootstrap para encerrar subforms -->
            <div class="form-group" 
                 <!-- Si es invalido, marquelo con has-error, si es valido 
                 marquelo con has-success -->
                 ng-class="{'has-error':formulario.txtEmail.$invalid, 'has-success' : formulario.txtEmail.$valid}">
                 <label for="txtEmail">
                    Email
                </label>

                <input id="txtEmail" type="email" class="form-control" 
                       placeholder="Ingrese email" name="txtEmail" 
                       ng-model="usuario.email" required>

                <!-- ng-show (Muestra la informacion solo si se cumple la 
                conficion que se este validando) -->
                <!-- $dirty (Si es obligatorio) && $invalid (Formato incorrecto)
                son propiedades angular para la validacion de campos-->
                <!-- <div ng-show="formulario.txtEmail.$dirty && formulario.txtEmail.$invalid"> -->
                <div>
                    <!-- Si del form, el campo tiene error por ser campo obligatorio
                    entonces lo muestra-->
                    <!-- Si del form, el campo tiene error por estar mal diligenciado
                    el correo  entonces lo muestra-->
                    <p class="help-block text-danger" ng-show="formulario.txtEmail.$error.required">Campo obligatorio</p>
                    <p class="help-block text-danger" ng-show="formulario.txtEmail.$error.email">Campo invalido</p>
                </div>    
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" name="chkAcepto" ng-model="usuario.acepto" required> Acepto.
                </label>
            </div>

            <!-- deshabilita el boton simpre y cuando se cumpla la condicion, la
             cual es que el formulario tenga algo invalido-->
            <button class="btn btn-success" ng-disabled="formulario.$invalid"> 
                Registrar
            </button>
        </form>

        <br>

        <span class="lead text-primary">

        </span>
    </body>
</html>
