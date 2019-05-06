<?php

//Turn on error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

//Require the autoload file
require_once('vendor/autoload.php');
require('pet.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /',
    function($f3) {
        //Instantiate the Pet class
        $pet1 = new Pet();
        $f3->set('pet1', $pet1);

        $template = new Template();
        echo $template->render('views/my-pets.html');
    });

//Run fat free
$f3->run();
