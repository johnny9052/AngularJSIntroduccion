'use strict';

/**
 * @ngdoc function
 * @name ejemploYoemanApp.controller:ControladortareasdbCtrl
 * @description
 * # ControladortareasdbCtrl
 * Controller of the ejemploYoemanApp
 */
angular.module('ejemploYoemanApp')
        .controller('ControladorTareasDB', function ($scope) {

            /*Nos conectamos a la base de datos a la base de datos*/
            var refTareas = new Firebase('https://conexionangular.firebaseio.com/tareas');

            //$scope.tareas = $firebaseArray(refTareas);

            /*Se define una funcion para agregar*/
            $scope.agregarTarea = function () {

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

            };

            /*Se define una funcion para eliminar tareas realizadas*/
            $scope.eliminarTareasRealizadas = function () {

            };
        });



