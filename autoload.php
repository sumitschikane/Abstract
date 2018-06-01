<?php


/**
 * Autoload classes from classes folder
 */

spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.class.php';
});