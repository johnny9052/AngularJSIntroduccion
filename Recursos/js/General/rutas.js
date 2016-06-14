/*Se referencia la app*/
var app = angular.module('miAp', ['ngRoute']);

/*Se asocian las diferentes paginas disponibles, indicando el controlador*/
app.config(function ($routeProvider) {
    $routeProvider
            .when('/', {
                templateUrl: 'Rutas_Inicio.php'
            })
            .when('/tareas', {
                controller: 'ControladorTareas',
                templateUrl: 'Rutas_tareas.php'
            })
            .when('/empleados', {
                controller: 'ControladorEmpleados',
                templateUrl: 'Rutas_empleados.php'
            })
            .otherwise({
                redirectTo: '/'
            });
});

/****************************************************************/
/*********************FORMULARIO EMPLEADOS***********************/
/****************************************************************/

app.factory('Empleados', function () {
    return [
        {
            nombre: 'Ana', paterno: 'Guzman', materno: 'Guzman', primerDia: new Date(),
            salario: 12000, telefono: '5587687687', bono: 1.456789
        },
        {
            nombre: 'Adrian', paterno: 'Romero', materno: 'Paez', primerDia: new Date(),
            salario: 12000, telefono: '5512345678', bono: 9.654321
        },
        {
            nombre: 'Rodolfo', paterno: 'Solares', materno: 'Madero', primerDia: new Date(),
            salario: 14000, telefono: '5587654321', bono: 7.333333
        },
        {
            nombre: 'Manuel', paterno: 'Perez', materno: 'Solin', primerDia: new Date(),
            salario: 11000, telefono: '5518273645', bono: 5.272727
        },
        {
            nombre: 'Dana', paterno: 'Roman', materno: 'Herrera', primerDia: new Date(),
            salario: 20000, telefono: '5581726354', bono: 1.444444
        },
        {
            nombre: 'Alejandro', paterno: 'Mena', materno: 'Morales', primerDia: new Date(),
            salario: 5000, telefono: '5512312312', bono: 12.989898
        }
    ];
});


app.controller('ControladorEmpleados', function ($scope, Empleados) {
    $scope.empleados = Empleados;

    $scope.ordenarPor = function (orden) {
        $scope.ordenSeleccionado = orden;
    };
});

/****************************************************************/
/*********************FORMULARIO EMPLEADOS***********************/
/****************************************************************/

app.factory('Tareas', function () {
    return [{texto: 'Tarea 1', hecho: true},
        {texto: 'Tarea 2', hecho: false}];
});

app.controller('ControladorTareas', function ($scope, Tareas) {
    
    $scope.tareas = Tareas;

    $scope.agregarTarea = function () {
        $scope.tareas.push({texto: $scope.textoNuevaTarea, hecho: false});
        $scope.textoNuevaTarea = '';
    };

    $scope.restantes = function () {
        var cuenta = 0;
        angular.forEach($scope.tareas, function (tarea) {
            cuenta += tarea.hecho ? 0 : 1;
        });
        return cuenta;
    };

    $scope.eliminar = function () {
        var tareasViejas = $scope.tareas;
        $scope.tareas = [];
        angular.forEach(tareasViejas, function (tarea) {
            if (!tarea.hecho)
                $scope.tareas.push(tarea);
        });
    };
});

