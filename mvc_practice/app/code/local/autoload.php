<?php
spl_autoload_register(function ($class_name) {
	$class_name = str_replace("_", "/", $class_name);
    // echo $class_name."<br>";
    include_once $class_name . '.php';
});