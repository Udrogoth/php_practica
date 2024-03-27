<?php

if(isset($_POST['nombre']) && isset($_POST['descripcion'])){
    echo "<h1>".$_POST['nombre']."</h1>";
    echo "<h1>".$_POST['descripcion']."</h1>";
}else{
    echo "<h1>Hubo un error</h1>";
}