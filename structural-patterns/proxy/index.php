<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/../../Utils/debug.php";

use App\SavedGame\SavedGameFull;
use App\SavedGame\SavedGameProxy;

class Main
{
    private static \SplObjectStorage $savedGames;

    public function __construct()
    {
        self::$savedGames = new \SplObjectStorage();
    }

    public function run()
    {
        $savedGames = $this->loadSavedGames();
        $this->listSavedGames($savedGames);
    }

    public static function loadSavedGames()
    {
        $count = 5;

        for ($i = 0; $i < $count; $i++) {
            $sg = new SavedGameProxy();
            $sg->initialize();
            self::$savedGames->attach($sg);
        }

        return self::$savedGames;

    }

    private static function listSavedGames(\SplObjectStorage $savedGames)
    {
        foreach ($savedGames as $savedGame) {
            print_r($savedGame->getName() . "\n");
        }
    }
}

(new Main())->run();