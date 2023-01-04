<?php

declare(strict_types=1);

namespace App\Builder;

use App\Component\Cpu;
use App\Component\GraphicsCard;
use App\Component\Ram;
use App\Component\Storage;
use App\Model\Computer;

class ComputerBuilder
{
   private $cpu = null;
   private $ram = null;
   private $storage = null;
   private $graphicsCard = null;
   private $description = "";

   public function setCpu(Cpu $cpu): self
   {
      $this->cpu = $cpu;
      return $this;
   }

   public function setRam(Ram $ram): self
   {
      $this->ram = $ram;
      return $this;
   }

   public function setStorage(Storage $storage): self
   {
      $this->storage = $storage;
      return $this;
   }

   public function setGraphicsCard(GraphicsCard $graphicsCard): self
   {
      $this->graphicsCard = $graphicsCard;
      return $this;
   }

   public function setDescription(string $description): self
   {
      $this->description = $description;
      return $this;
   }

   public function build(): Computer
   {
      return new Computer($this->cpu, $this->ram, $this->storage, $this->graphicsCard, $this->description);
   }
}