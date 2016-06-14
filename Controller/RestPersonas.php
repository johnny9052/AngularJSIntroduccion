<?php

/* Capturamos el tipo de la peticion: podría ser get, post, put o delete. */
$method = $_SERVER['REQUEST_METHOD'];
// Se obtiene la URI
$resource = $_SERVER['REQUEST_URI'];

//echo '{"valor": "'.$method . '.........' . $resource.'"}';
//echo $method . '.........' . $resource;
// Dependiendo del método de la petición ejecutaremos la acción correspondiente.


switch (strtolower($method)) {
    case 'get':

        $id = (isset($_GET['id']) ? $_GET['id'] : "");

        if ($id != "") {
             echo '[{"texto":"primer mensaje","hecho":false},{"texto":"segundo mensaje","hecho":true},{"texto":"tercer mensaje","hecho":true}]';
        } else {
            echo '[{"texto":"primer mensaje","hecho":false},{"texto":"segundo mensaje","hecho":true}]';
        }
        break;

    case 'post':
        /* agregar */
        $data = $_POST;
        $data = json_encode($data);
        //echo $data;
        
        echo '[{"msj":"Aqui nos llego"}]';

        break;

    case 'put':

        /* Modificar */
        $id = (isset($_GET['id']) ? $_GET['id'] : "");
        parse_str(file_get_contents("php://input"), $post_vars);
        echo json_encode($post_vars) . ' y su id es ' . $id;

        break;

    case 'delete':
        /* Borrar */
        $id = (isset($_GET['id']) ? $_GET['id'] : "");
        echo 'El id es: ' . $id;
        break;
}
