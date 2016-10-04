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
    </head>
    <body>
        
                       
        <b>0. Programas para instalar:</b> GIT  { https://git-scm.com/ }, NodeJS { https://nodejs.org/en/ },                   
        <br>        
        <br>        
        <b>1. "REST"</b> es un paradigma, mientras <b>"RESTful"</b> describe el uso de ese paradigma
        <br>
        <br>        
        <b>2. Angular:</b> Framework front-end de google MVC que busca reemplazar JQUERY (Aunque internamente tiene un JQUERY reducido)
        <br>
        <br>        
        <b>3. Angular-Seed:</b> Arquitectura basica para trabajar en angular, se encuentra en https://github.com/angular/angular-seed
        <br>
        <br>        
        <b>4. ngBoilerplate:</b>  Arquitectura basica para trabajar en angular, se encuentra en https://github.com/ngbp/ngbp
        <br>
        <br>        
        <b>5. Bower:</b> Gestor de dependecias y paquetes en angular (Maven en Java), Instalador de repositorios del lado del cliente (Angular, bootstrap, jquery, etc.)
        <br>
        <br>
        ***El archivo bower.json contiene la configuracion de instalacion de dependencias, y 
        para instalarlas se debe: 
        <br>
        **********En la consola indicar bower install
        <br>
        **********Si queremos consultar librerias disponibles es:
        <br>
        ***********************bower search palabra_A_Buscar
        <br>
        **********Si queremos instalar una sola libreria es:
        <br>
        ***********************bower install nombreLibreria
        <br>
        <br> 
        <b>6 GRUNT:</b> Administrador de tareas para automatizar procesos, como levantar servidor NODEJS,
        minificar o embarañar codigo, actualizacion de cambios en tiempo real, ralizar pruebas
        <br>
        <br> 
        <b>7. NodeJS:</b> Instalador de componentes para administrar frameworks y modulos js del lado del servidor
        <br>
        <br> 
        <b>8. NPM:</b> Gestor de paquetes NodeJS, para instalar modulos adicionales de NODE         
        <b>9. Yeoman (Joumen):</b> Arquitectura bascia para trabajar en angular pero permite administracion 
        de dependencias y paquetes con bower, y automatizacion de tareas con GRUNT.
        <br>        
        <br> 
        Para este primero se debe (Recordar que -g es por aplicacion global): 
        <br>
        <br> 
        ***Instalar nodeJS (Descargar instalador de la pagina)
        <br>
        ***Luego instalar GRUNT via NPM con: npm install -g grunt-cli
        <br>
        ***Luego instalar BOWER via NPM con: npm install -g bower                         
        <br>
        ***Luego instalar Yoeman via NPM con: npm install -g yo   
        <br>
        ***Luego instalar El generador via NPM con: npm install -g generator-angular
        <br>
        ***Crear carpeta de proyecto y dentro de esta creamos la estructura yoeman con: 
        <br>
        *** yo angular
        <br>
        ***A lo unico que le damos si es a Bootstrap
        <br>
        ***Cuando aparezca los modulos JS dar enter  
        <br>
        ***Siempre se demora un poco el proceso de instalacion
        <br>
        ***Si se va a app/scripts/app.js es donde arranca el proyecto, aqui se definen 
        las dependencias necesarias, como tambien las rutas del proyecto
        <br>
        ***En views estan las vistas que se cargar con las rutas en el app.js
        <br>
        ***Con el comando grunt server en la raiz del proyecto se levanta un servidor para que cualquier
        cambio que suceda en el proyecto sea actualizado automaticamente
        <br>
        **********Para añadir un controlador es con el comando yo angular:controller nombreArchivo
        <br>
        **********Para añadir una vista es con el comando yo angular:view nombreArchivo
        <br>
        **********Para añadir una directiva es con el comando yo angular:directive nombreArchivo
        <br>
        **********Para añadir un filtro es con el comando yo angular:filter nombreArchivo
        <br>
        **********Para añadir un servicio es con el comando yo angular:service nombreArchivo
        <br>
        <br>
        <b>10. EXPRESS:</b> Framework mas utilizado de NODEJS
        <br>
        <br>
        <b>11. Karma:</b> Framework para realizar pruebas y test sobre angular
        <br>
        <br>
        <b>12. Jasmine:</b> Lenguaje con que se definen que pruebas hacer en karma
        <br>
        <br>
        <b>13. Diferencia service - factory - provider:</b> Basicamente es en la forma que 
        se define cada una, pero hacen exactamente lo mismo, ya se por estilos 
        de desarrollo, eso si son singleton y se definen para que puedan ser
        utilizados por cualquier controlador :)
        <br>
        <br>
        <br>
        <br>
        var myApp = angular.module('myApp', []);
        <br>
        <br>
        //service style, probably the simplest one
        <br>
        <br>
        myApp.service('helloWorldFromService', function() {
        <br>
        <br>
        this.sayHello = function() {
        <br>
        <br>
        return "Hello, World!";
        <br>
        <br>
        };
        <br>
        <br>
        });
        <br>
        <br>
        //factory style, more involved but more sophisticated
        <br>
        <br>
        myApp.factory('helloWorldFromFactory', function() {
        <br>
        <br>
        return {
        <br>
        <br>
        sayHello: function() {
        <br>
        <br>
        return "Hello, World!";
        <br>
        <br>
        }
        <br>
        <br>
        };
        <br>
        <br>
        });
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        provider style, full blown, configurable version   
        <br>
        <br>
        myApp.provider('helloWorld', function() {
        <br>
        <br>
        this.name = 'Default';
        <br>
        <br>
        this.$get = function() {
        <br>
        <br>
        var name = this.name;
        <br>
        <br>
        return {
        <br>
        <br>
        sayHello: function() {
        <br>
        <br>
        return "Hello, " + name + "!";
        <br>
        <br>
        }
        <br>
        <br>
        }
        <br>
        <br>
        };
        <br>
        <br>
        this.setName = function(name) {
        <br>
        <br>
        this.name = name;
        <br>
        <br>
        };
        <br>
        <br>
        });
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        hey, we can configure a provider!  
        <br>
        <br>
        myApp.config(function(helloWorldProvider){
        <br>
        <br>
        helloWorldProvider.setName('World');
        <br>
        <br>
        });
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        function MyCtrl($scope, helloWorld, helloWorldFromFactory, helloWorldFromService) {
        <br>
        <br>
        $scope.hellos = [
        <br>
        <br>
        helloWorld.sayHello(),
        <br>
        <br>
        helloWorldFromFactory.sayHello(),
        <br>
        <br>
        helloWorldFromService.sayHello()];
        <br>
        <br>
        }
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h5>TUTORIALES</h5>
        <b>https://www.youtube.com/watch?v=l25VkqsvkfY&index=8&list=PL6LPvqvHdclbrYqIdNLm5zOodZrebZaln</b>

    </body>
</html>
