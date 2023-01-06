<?php

declare(strict_types=1);

namespace App\Officer;

use App\Message\Message;

class General extends Officer
{
   private static int $CODE = 10;
   private static string $NAME = "Generał Kowalski";
   public function processMessage(Message $message)
   {
      if ($message->getOfficerRank() === OfficerRank::GENERAL && $message->getCode() == self::$CODE) {
         print_r(self::$NAME . " otrzymał wiadomość: " . $message->getContent());
      } else {
         print_r("Nie poprawny adresat wiadomości !!!\n");
      }
   }
}