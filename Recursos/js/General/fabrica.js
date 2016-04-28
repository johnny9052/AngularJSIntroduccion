/*Referencia al app a utilizar, que es el ng-app*/
var app = angular.module("appControladorFiltro", []);



/*Se define la fabrica para compartir variables entre controladores*/
app.factory('Fabrica', function () {
    var servicio = {
        objeto: {mensaje: 'Saludos desde la fabrica'},
        msjInicial: function () {
            servicio.objeto.mensaje = 'Saludos desde la fabrica';
        },
        msjNuevo: function (msj) {
            servicio.objeto.mensaje = msj;
        }
    };
    return servicio;
});


/*Toda funcion de controlador debe tener un $scope y 
 Adicionalmente el nombre de la fabrica*/
/*app.controller(nombre de la funcion)*/
app.controller('ControladorUno', function ($scope, Fabrica) {

    /*Se define una funcion */
    $scope.nuevo = function () {
        Fabrica.msjNuevo($scope.nuevoMensaje);
    };

    //$scope.dato = {mensaje: "Saludos desde el controlador 1"};
    $scope.dato = Fabrica.objeto;

});


/*Toda funcion de controlador debe tener un $scope y 
 Adicionalmente el nombre de la fabrica*/
/*app.controller(nombre de la funcion)*/
app.controller('ControladorDos', function ($scope, Fabrica) {

    /*Se define una funcion */
    $scope.nuevo = function () {
        Fabrica.msjNuevo($scope.nuevoMensaje);
    };

    //$scope.dato = {mensaje: "Saludos desde el controlador 2"};
    $scope.dato = Fabrica.objeto;

});



app.controller('ControladorTres', function ($scope, Fabrica) {
    /*Se define una funcion */
    $scope.resetear = function () {
        Fabrica.msjInicial();
    };
});
