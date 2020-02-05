<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//If you start a session, do if AFTER
// the autoload
session_start();

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /',
    function($f3) {

        $pet1 = new Pet("Fido", "pink");
        $pet2 = new Pet();
        $pet2->setName("Nick");
        $dog1 = new Dog("Fifi");

        //var_dump($pet1);

        $f3->set('pet1', $pet1);
        $f3->set('pet2', $pet2);
        $f3->set('dog1', $dog1);

        $view = new Template();
        echo $view->render('views/my-pets.html');

    });

//Run fat free
$f3->run();
