<?php 

namespace App;

class Hello {


    public function talk (string $name): string
    {
        return "Hello " . $name;
    }
}
