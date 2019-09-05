<?php

class dog
{
    public $animal;
    public $gender;

    public function __construct($animal, $gender)
    {
        $this->animal = $animal;
        $this->gender = $gender;
    }

    public function cry() 
    {
        echo 'ワン';
        echo '<br>';
    }

    public function bilingual() 
    {
        echo 'ごはんちょうだい';
        echo '<br>';
    }
}