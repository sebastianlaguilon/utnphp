<?php

if(isset($_GET['titulo'])&& isset($_GET['descripcion'])){
    echo "El titulo es ". $_GET['titulo']."<br/>";
    echo "se trata de ".$_GET['descripcion'];
}

