<?php

//pet.php

class Pet
{
    private $_name;
    private $_color;

    //Define default constructor
    /*function __construct()
    {
        $this->_name = 'unknown';
        $this->_color = '?';
    }
    */

    //Define parameterized constructor
    function __construct($name='unknown', $color='?')
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    function eat()
    {
        echo '<p>'. $this->_name .' is eating.</p>';
        //echo '<p>'. $_name .' is eating.</p>';
    }
}