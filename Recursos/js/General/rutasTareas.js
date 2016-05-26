/*Factory tareas donde defino las variables globales de este*/
app.factory('FactoryTareas', function () {
    return [
        {texto: 'Este es el mensaje 1', hecho: true},
        {texto: 'Este es el mensaje 2', hecho: false},
        {texto: 'Este es el mensaje 2', hecho: true}
    ];
});


/*Toda funcion de controlador debe tener un $scope*/
/*app.controller(nombre de la funcion)*/
app.controller('ControllerTareas', function ($scope, FactoryTareas) {

    $scope.tareas = FactoryTareas;

    /*Se define una funcion para agregar*/
    $scope.agregarTarea = function () {
        /*Añadimos un objeto al listado de tareas*/
        $scope.tareas.push({texto: $scope.txtNuevaTarea, hecho: false});
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

