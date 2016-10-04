<?php

isset($_POST['usuario']) ? $user = $_POST['usuario'] : $user = "";
isset($_POST['password']) ? $pass = $_POST['password'] : $pass = "";


echo '{"user" : "'.$user.'","res":"Operacion exitosa!","status":true}';



