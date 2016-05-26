<!--Muestra el total de tareas-->
<h1>{{contarTareasRestantes()}} de {{tareas.length}}</h1>
<button class="btn btn-danger" type="button" 
        ng-click="eliminarTareasRealizadas()">Eliminar tareas realizadas</button>
<br>
<br>


<ul>
    <!-- Recorre el listado de tareas, y por cada elemento incrusta
    el codigo que se encuentra dentro del LI-->
    <li ng-repeat="obj in tareas">
        <label class="hecho-{{obj.hecho}}">{{obj.texto}}</label>
        <input type="checkbox" ng-model="obj.hecho">                                        
    </li>
</ul>  


<form ng-submit="agregarTarea()">
    <input type="text" size="30" placeholder="Agregar una nueva tarea"
           ng-model="txtNuevaTarea">
    <button class="btn btn-primary" type="submit">Agregar</button>
</form>