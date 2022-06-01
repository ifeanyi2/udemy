<?php

spl_autoload_register(function($class){
   require "../app/models/".$class.".model.php";
});

require "functions.php";
require "config.php";
require "Database.php";
require "controller.php";
require "App.php";