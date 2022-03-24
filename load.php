<?php

function auto_load($class_name) {
    include 'classes/'.$class_name.'.php';
}
spl_autoload_register("auto_load");