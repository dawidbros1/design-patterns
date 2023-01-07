<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/../../Utils/debug.php";

use App\Chef\Chef;
use App\Chef\EggCooker\HardBoiledEggCooker;
use App\Chef\EggCooker\SoftBoiledEggCooker;

class Main
{
    public function run()
    {
        // Nowe zamówienie - jajka na twardo
        $chef = new Chef("Maga Łecler");
        $chef->setEggCooker(new HardBoiledEggCooker());
        $chef->cook();

        // Nowe zamówienie - jajka na miękko
        $chef->setEggCooker(new SoftBoiledEggCooker());
        $chef->cook();
    }
}

(new Main())->run();