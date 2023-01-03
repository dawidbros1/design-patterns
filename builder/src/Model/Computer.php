<?php

declare(strict_types=1);

namespace App\Model;

use App\Component\Cpu;
use App\Component\GraphicsCard;
use App\Component\Ram;
use App\Component\Storage;

class Computer
{
    private $cpu;
    private $ram;
    private $storage;
    private $graphicsCard;

    private $description;

    public function __construct(? Cpu $cpu, ? Ram $ram, ? Storage $storage, ? GraphicsCard $graphicsCard, string $description = "")
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->storage = $storage;
        $this->graphicsCard = $graphicsCard;
        $this->description = $description;
    }

    public function getCpu(): ? Cpu
    {
        return $this->cpu;
    }

    public function getRam(): ? Ram
    {
        return $this->ram;
    }

    public function getStorage(): ? Storage
    {
        return $this->storage;
    }

    public function getGraphicsCard(): ? GraphicsCard
    {
        return $this->graphicsCard;
    }

    public function show()
    {
        print_r("<b>{$this->description}</b>" . "<br>");
        print_r($this->cpu ? "CPU: {$this->cpu->getModel()} <br>" : 'Brak CPU <br>');
        print_r($this->ram ? "RAM: {$this->ram->getCapacity()} <br>" : 'Brak RAM <br>');
        print_r($this->storage ? "HDD: {$this->storage->getHddCapacity()} <br>" : 'Brak HDD <br>');
        print_r($this->storage ? "SSD: {$this->storage->getSsdCapacity()} <br>" : 'Brak SSD <br>');
        print_r($this->graphicsCard ? "Graphics card: {$this->graphicsCard->getModel()} <br>" : 'Brak karty graficznej <br>');
        print('----------------------------------------- <br>');
    }
}