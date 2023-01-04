<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

use App\GameEngine;

class Main
{
    private GameEngine $instance1;
    private GameEngine $instance2;

    public function __construct()
    {
        $this->instance1 = GameEngine::getInstance();
        $this->instance2 = GameEngine::getInstance();

        print_r($this->instance1 == $this->instance2); // True
    }
}

(new Main());