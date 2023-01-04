<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/../../Utils/debug.php";

use App\Unit\Archer;
use App\Unit\Soldier;
use App\Unit\Tank;

# Separation of the common part of objects into a separate shared one
# classes to save memory

class Main
{
    public function run()
    {
        $archer = new Archer(0, 0);
        $archer2 = new Archer(0, 0);

        dump($archer === $archer2 ? "YES" : "NO"); // NO
        dump($archer->getStats() === $archer2->getStats() ? "YES" : "NO"); // YES
    }
}

(new Main())->run();