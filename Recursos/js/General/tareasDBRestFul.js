/*Referencia al app a utilizar, que es el ng-app*/

/*[] se utiliza para inyeccion de dependencias, como no se va a utilizar 
 * ninguna por el momento se deja vacio*/

var app = angular.module("appControladorTareas", ['ngRoute', 'ngResource']);

/*Toda funcion de controlador debe tener un $scope*/
/*app.controller(nombre de la funcion) function ($scope, FACTORY A LA QUE APUNTA SI LA DEBE DE TENER)*/
app.controller('ControladorTareas', function ($scope, TareasResource) {

    /*Se traen las tareas*/
    $scope.resultado=[{"msj":"Aqui NO llego"}];
    $scope.tareas = TareasResource.obtenerTareas.todas();
    
        
    /*Se define una funcion para agregar*/
    $scope.agregarTarea = function () {
        /*Añadimos un objeto al listado de tareas*/
        //$scope.resultado = TareasResource.agregar.nuevaTarea({texto: $scope.txtNuevaTarea, hecho: false});
        $scope.resultado=[{"msj":"Aqui SI llego"}];
        $scope.tareas = TareasResource.obtenerTareas2.todas2();
        $scope.txtNuevaTarea = "";
    };

    /*Se define una funcion para contar tareas restantes*/
    $scope.contarTareasRestantes = function () {
        var cont = 0;
        /*Funcion angular para recorrer con un foreach*/
        /*Recorre el listado de tareas, retornandolo como obj*/
        angular.forEach($scope.tareas, function (obj) {
            cont += obj.hecho ? 0 : 1;
        });
        return cont;
    };

    /*Se define una funcion para eliminar tareas realizadas*/
    $scope.eliminarTareasRealizadas = function () {

        var tareasViejas = $scope.tareas;
        $scope.tareas = [];
        /*Funcion angular para recorrer con un foreach*/
        /*Recorre el listado de tareas, retornandolo como obj*/
        angular.forEach(tareasViejas, function (obj) {
            (!obj.hecho) ? $scope.tareas.push(obj) : "";
        });
    };
});






