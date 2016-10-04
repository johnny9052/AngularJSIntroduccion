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
        <script src="../Recursos/js/General/app.js" type="text/javascript"></script>


        <!-- ARCHIVOS DEL LOGIN-->
        <script src="../Recursos/js/General/logIn/logInCtl.js" type="text/javascript"></script>
        <script src="../Recursos/js/General/logIn/logInSer.js" type="text/javascript"></script>

    </head>

    <body ng-app="appPrincipal">
        <!-- Seccion donde se actualizara el contenido definido en el route, 
        especificado con ng-view -->
        <div class="container">            
            <!-- FORMULARIO LOGIN -->
            <form ng-controller="CtlLogIn" name="formLogIn">
                <table  border="0">
                    <tr>
                        <td>
                            <label>Usuario</label>                        
                        </td>
                        <td>
                            <!-- Se asocial el modelo al campo-->
                            <input type="text" id="txtUsuario" name="usuario" 
                                   ng-model="identificacion.usuario" required>
                        </td>                     
                    </tr>

                    <tr>
                        <td>
                            <label>Password</label>                        
                        </td>
                        <td>
                            <input type="password" id="txtPassword" name="password" 
                                   ng-model="identificacion.password" required>
                        </td>                     
                    </tr>

                    <tr>
                        <td>

                        </td>
                        <td>
                            <!-- Se envia por parametro si esta bien diligenciado
                            el formulario o no-->
                            <input type="button" value="Loguin" id="btnLoguin" 
                                   ng-click="logIn(formLogIn.$valid)">                       
                        </td>
                    </tr>
                </table>           
            </form>
            <!--END FORMULARIO LOGIN -->


</html>
