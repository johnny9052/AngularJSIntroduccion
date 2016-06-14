'use strict';

/*OJOOOO SI APARECE ESTE ERROR: Error: [$resource:badcfg] es porque el dato que se 
 * recibe es un array - objeto y se esperaba el vicebersa*/
angular.module('appControladorTareas')
        .factory('TareasResource', function ($resource) {
            var $factory = {
                obtenerTareas: $resource('../Controller/RestPersonas.php', {}, {
                    todas: {method: 'GET', isArray: true}
                }),
                 obtenerTareas2: $resource('../Controller/RestPersonas.php?id=5', {}, {
                    todas2: {method: 'GET', isArray: true}
                }),
                agregar: $resource('../Controller/RestPersonas.php', {}, {
                    nuevaTarea: {method: 'POST', isArray: true, params: {texto: '@texto', hecho: '@hecho'}}
                })
            };
            return $factory;
        });