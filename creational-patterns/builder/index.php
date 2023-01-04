<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

use App\Builder\ComputerBuilder;
use App\Component\Cpu;
use App\Component\GraphicsCard;
use App\Component\Ram;
use App\Component\Storage;
use App\Builder\CheapComputerBuilder;
use App\Builder\ExpensiveComputerBuilder;

class Main
{
    public function run()
    {
        $builder = new ComputerBuilder();
        $cheapComputerBuilder = new CheapComputerBuilder();
        $expensiveComputerBuilder = new ExpensiveComputerBuilder();

        $computer = $builder
            ->setCpu(new Cpu('Intel Core i7'))
            ->setRam(new Ram('16GB DDR4'))
            ->setStorage(new Storage('1TB HDD', '256GB SSD'))
            ->setGraphicsCard(new GraphicsCard('GeForce RTX 2080'))
            ->setDescription("Sam budowałem tego kompa")
            ->build();

        $cheapComputer = $cheapComputerBuilder->build();
        $expensiveComputer = $expensiveComputerBuilder->build();

        $computer->show();
        $cheapComputer->show();
        $expensiveComputer->show();
    }
}

(new Main())->run();