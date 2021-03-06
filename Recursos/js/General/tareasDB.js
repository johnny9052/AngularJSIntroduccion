/*Referencia al app a utilizar, que es el ng-app*/

/*[] se utiliza para inyeccion de dependencias, como no se va a utilizar 
 * ninguna por el momento se deja vacio*/

var app = angular.module("appControladorTareas", []);

/*Toda funcion de controlador debe tener un $scope*/
/*app.controller(nombre de la funcion)*/
app.controller('ControladorTareas', function ($scope) {
    $scope.tareas = [
        {texto: 'Este es el mensaje 1', hecho: true},
        {texto: 'Este es el mensaje 2', hecho: false},
        {texto: 'Este es el mensaje 2', hecho: true}
    ];

    /*Nos conectamos a la base de datos a la base de datos*/
    var refTareas = new Firebase('https://conexionangular.firebaseio.com/tareas');


    /*Se define una funcion para agregar*/
    $scope.agregarTarea = function () {
        /*Añadimos un objeto al listado de tareas*/

        $scope.tareas.push({texto: $scope.txtNuevaTarea, hecho: false});

        /*Mandamos el dato a firebase*/
        refTareas.set({texto: $scope.txtNuevaTarea, hecho: false}, function (error) {
            if (error) {
                console.log("Error:", error);
            } else {
                console.log("Profile set successfully!");
            }
        });

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






