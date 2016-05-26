
/*Factory empleados donde defino las variables globales de este*/
app.factory('FactoryEmpleados', function () {
    return [
        {
            nombre: 'Ana', primerApellido: 'Guzman', segundoApellido: 'Cardona',
            fecha: new Date(), salario: 4234, telefono: 3174235432, bono: 1.5232
        },
        {
            nombre: 'Pedro', primerApellido: 'Sarmiento', segundoApellido: 'Montealegre',
            fecha: new Date(), salario: 12074600, telefono: 3151935432, bono: 1.5545
        },
        {
            nombre: 'Eliza', primerApellido: 'Sepulveda', segundoApellido: 'Salazar',
            fecha: new Date(), salario: 1218667000, telefono: 3216435432, bono: 1.521
        },
        {
            nombre: 'Juan', primerApellido: 'Triviño', segundoApellido: 'Vasco',
            fecha: new Date(), salario: 67120678600, telefono: 3105125432, bono: 1.5453
        },
        {
            nombre: 'Angela', primerApellido: 'Montoya', segundoApellido: 'Caicedo',
            fecha: new Date(), salario: 23321312000, telefono: 3186545432, bono: 1.5121
        }
    ];
});


/*Toda funcion de controlador debe tener un $scope*/
/*app.controller(nombre de la funcion)*/
app.controller('ControllerEmpleados', function ($scope, FactoryEmpleados) {
    $scope.empleados = FactoryEmpleados;
    /*Se define una funcion para ordenar los elementos*/
    $scope.ordenarPor = function (tipo) {
        $scope.ordenSeleccionado = tipo;
    };
});




