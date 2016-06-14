'use strict';

/**
 * @ngdoc overview
 * @name ejemploYoemanApp
 * @description
 * # ejemploYoemanApp
 *
 * Main module of the application.
 */
angular
        .module('ejemploYoemanApp', ['ngRoute','firebase'])
        .config(function ($routeProvider) {
            $routeProvider
                    .when('/', {
                        templateUrl: 'views/main.html',
                        controller: 'MainCtrl',
                        controllerAs: 'main'
                    })
                    .when('/about', {
                        templateUrl: 'views/about.html',
                        controller: 'AboutCtrl',
                        controllerAs: 'about'
                    })

                    .when('/tareas', {
                        templateUrl: 'views/tareas.html',
                        controller: 'ControladorTareas',
                        controllerAs: 'ControladorTareas'
                    })
                    .when('/tareasDB', {
                        templateUrl: 'views/tareasDB.html',
                        controller: 'ControladorTareasDB',
                        controllerAs: 'ControladorTareasDB'
                    })
                    .otherwise({
                        redirectTo: '/'
                    });
        });
