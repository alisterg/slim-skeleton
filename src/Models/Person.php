<?php

namespace TestingStuff\Models;

class Person
{
    public $name;
    public $id;

    public function __construct($id)
    {
        $this->id = $id;

        switch($id)
        {
            case 1:
                $this->name = "alister"; break;
            case 2:
                $this->name = "g"; break;
            default:
                $this->name = "no one"; break;
        }
    }
}
