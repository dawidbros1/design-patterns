<?php

declare(strict_types=1);

namespace App\Officer;

use App\Message\Message;

abstract class Officer
{
   private Officer $superiorOfficer;

   abstract public function processMessage(Message $message);

   public function getSuperiorOfficer()
   {
      return $this->superiorOfficer;
   }

   public function setSuperiorOfficer($superiorOfficer)
   {
      $this->superiorOfficer = $superiorOfficer;
   }
}