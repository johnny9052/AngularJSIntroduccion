
var app = angular.module("appDirectivaSimple", []);



/*Toda funcion de controlador debe tener un $scope*/
/*app.controller(nombre de la funcion)*/
app.controller('ControllerEncabezado', function ($scope) {
    $scope.texto1 = {titulo: 'Encabezado', subtitulo: 'Desde el HTML'};
    $scope.texto2 = {titulo: 'Encabezado2', subtitulo: 'Desde el HTML'};
});



/*Nombre de la directiva iniciando en minuscula y la funcion*/
/*El nombre de la dierectiva debe tener los dos primeros caracteres en
 *  minuscula, y la siguiente palabra iniciado con mayuscula, con esto
 *  la directiva "diEncabezado" si se quiere llamar seria: di-encabezado*/
app.directive('diEncabezado', function () {
    return{
        restrict: 'AE', /*Cómo se llama la directiva A: Atributo   E: Elemento
                        * AE: Atributo o elemento (Atributo es colocarlo 
                        * dentro de una etiqueta, elemento es que se creo una
                        * etiqueta con ese nombre)*/
        scope:{
          textoVariable:'=texto'//Se deja aisaldo el scope para que no 
                                //herede sus valores
        },                               
        templateUrl: 'DirectivaEncabezado.php'
    };
});
