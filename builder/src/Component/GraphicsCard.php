<?php

declare(strict_types=1);

namespace App\Component;

class GraphicsCard
{
   private $model;

   public function __construct(string $model)
   {
      $this->model = $model;
   }

   public function getModel(): string
   {
      return $this->model;
   }
}