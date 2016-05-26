/*Referencia al app a utilizar, que es el ng-app*/
/*Adicionalmente, como vamos a utilizar el route, toca referenciarlo*/
var app = angular.module("appRutas", ['ngRoute']);


/*Toca configurar el route, indicandole cada una de las paginas a cargar
 * segun el enlace que se quiere*/
app.config(function ($routeProvider) {
    $routeProvider
            /*Cuando no haya URL carga el inicio*/
            .when('/', {
                templateUrl: 'Rutas_Inicio.php'
            })
            /*Cuando la URL es /tareas carga tareas.php*/
            .when('/tareas', {
                controller: 'ControllerTareas',
                templateUrl: 'Rutas_tareas.php'
            })
            .when('/empleados', {
                controller: 'ControllerEmpleados',
                templateUrl: 'Rutas_empleados.php'
            })
            /*Si la URL ingresada no existe, carga el inicio*/
            .otherwise({
                redirectTo: '/'
            });
});



