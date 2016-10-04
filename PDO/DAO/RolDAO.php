<?php

/**
 * Definicion de acciones para la gestion de los roles
 * @author Johnny Alexander Salazar
 * @version 0.1
 */
class RolDAO {

    private $repository;

    function RolDAO() {
        require_once '../Infraestructure/Repository.php';
        $this->repository = new Repository();
    }

    /**
     * Ejecuta un guardar en la base de datos
     * @param RolDTO $obj 
     * @return void      
     * @author Johnny Alexander Salazar
     * @version 0.1
     */
    public function Save(Rol $obj) {
        $query = "insert into rol (nombre,descripcion) "
                . "values ('" . $obj->getName() . "','" . $obj->getDescription() . "')";
        $this->repository->ExecuteTransaction($query);
    }

    /**
     * Ejecuta un buscar en la base de datos
     * @param RolDTO $obj 
     * @return void      
     * @author Johnny Alexander Salazar
     * @version 0.1
     */
    public function Search(Rol $obj) {
        $query = "select id,nombre,descripcion "
                . "from rol where nombre = '" . $obj->getId() . "'";
        $this->repository->Execute($query);
    } 

}
