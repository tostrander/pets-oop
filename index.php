<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//If you start a session, do if AFTER
//requiring the autoload
session_start();

//Create an instance of the Base class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /',
    function($f3) {

        //Instantiate the Pet class
        $pet1 = new Pet();
        $f3->set('pet1', $pet1);

        $pet2 = new Pet("Fido", "pink");
        $f3->set('pet2', $pet2);

        $pet3 = new Pet("Rufus");
        $f3->set('pet3', $pet3);

        $template = new Template();
        echo $template->render('views/my-pets.html');
    });

//Run fat free
$f3->run();
