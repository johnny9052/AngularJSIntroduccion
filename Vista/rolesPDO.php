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


        <!-- ARCHIVOS PROPIOS DEL FORMULARIO-->
        <script src="../Recursos/js/General/rol/rolCtl.js" type="text/javascript"></script>
        <script src="../Recursos/js/General/rol/rolSer.js" type="text/javascript"></script>

    </head>

    <body ng-app="appPrincipal">
        <!-- Seccion donde se actualizara el contenido definido en el route, 
        especificado con ng-view -->
        <div class="container">            
            <!-- FORMULARIO LOGIN -->
            <form ng-controller="CtlRol" name="formRol">
                <table  border="0">
                    <tr>
                        <td>                                                   
                        </td>
                        <td>
                            <!-- Se asocial el modelo al campo-->
                            <input type="hidden" id="txtId" name="id" 
                                   ng-model="obj.id">
                        </td>                     
                    </tr>
                    <tr>
                        <td>
                            <label>Nombre del rol</label>                        
                        </td>
                        <td>
                            <!-- Se asocial el modelo al campo-->
                            <input type="text" id="txtNombre" name="nombre" 
                                   ng-model="obj.nombre" required>
                        </td>                     
                    </tr>

                    <tr>
                        <td>
                            <label>Descripcion</label>                        
                        </td>
                        <td>
                            <input type="text" id="txtDescripcion" name="descripcion" 
                                   ng-model="obj.descripcion" required>
                        </td>                     
                    </tr>

                    <tr>
                        <td>

                        </td>
                        <td>
                            <!-- Se envia por parametro si esta bien diligenciado
                            el formulario o no-->
                            <input type="button" value="Guardar" id="btnGuardar" 
                                   ng-click="guardar(formRol.$valid)">                       


                            <input type="button" value="Buscar" id="btnBuscar" 
                                   ng-click="buscar(formRol.$valid)">    
                        </td>
                    </tr>
                </table>           
            </form>
            <!--END FORMULARIO LOGIN -->


</html>
