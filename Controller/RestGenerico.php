<?php

/* Capturamos el tipo de la peticion: podría ser get, post, put o delete. */
$method = $_SERVER['REQUEST_METHOD'];

// Dependiendo del método de la petición ejecutaremos la acción correspondiente.
switch (strtolower($method)) {
    /* Buscar o Listar */
    case 'get':

        $id = (isset($_REQUEST['id']) ? $_REQUEST['id'] : "");

        if ($id != "") {
            //Buscar
            //RESPUESTA EN FORMATO JSON
        } else {
            //Listar
            //RESPUESTA EN FORMATO JSON
        }
        break;

    case 'post':
        /* Guardar */
        //RESPUESTA EN FORMATO JSON
        break;
          
    case 'put':
        /* Modificar */
        //RESPUESTA EN FORMATO JSON
        break;
          
    case 'delete':
        
        $id = (isset($_REQUEST['id']) ? $_REQUEST['id'] : "");
        
        /* Eliminar */
        //RESPUESTA EN FORMATO JSON
        break;
}
