<?php

declare(strict_types=1);

namespace App\Officer;

use App\Message\Message;

class Captain extends Officer
{
   private static int $CODE = 50;
   private static string $NAME = "Kapitan Kowalski";
   public function processMessage(Message $message)
   {
      if ($message->getOfficerRank() === OfficerRank::CAPTAIN && $message->getCode() == self::$CODE) {
         print_r(self::$NAME . " otrzymał wiadomość: " . $message->getContent());
      } else {
         $this->getSuperiorOfficer()->processMessage($message);
      }
   }
}