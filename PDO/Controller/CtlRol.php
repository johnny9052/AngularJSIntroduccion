<?php

/* IMPORTS */
require '../Modelo/Rol.php';
require '../DAO/RolDAO.php';

/* Capturamos el tipo de la peticion: podría ser get, post, put o delete. */
$method = $_SERVER['REQUEST_METHOD'];

$dao = new RolDAO();

// Dependiendo del método de la petición ejecutaremos la acción correspondiente.
switch (strtolower($method)) {
    /* Buscar o Listar */
    case 'get':

        $id = (isset($_REQUEST['id']) ? $_REQUEST['id'] : "");

        if ($id != "") {
            //Buscar
            $obj = new Rol($id, null, null);
            $dao->Search($obj);
        } else {
            //Listar
            //RESPUESTA EN FORMATO JSON
        }
        break;

    case 'post':
        /* Guardar */
        /* CONTROL DE ACCIONES */
        $data = $_POST;
        $data = json_decode(json_encode($_POST));
        $obj = new Rol(null, $data->nombre, $data->descripcion);
        $dao->Save($obj);
        break;

    case 'put':
        /* Modificar */
        //RESPUESTA EN FORMATO JSON
        break;

    case 'delete':

        /* Eliminar */
        //RESPUESTA EN FORMATO JSON
        break;
}
