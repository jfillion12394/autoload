<?php 

namespace App\Wcs;

class Hello {


    public function talk (string $name): string
    {
        return "Hello " . $name;
    }
}
