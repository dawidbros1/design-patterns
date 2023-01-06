<?php

declare(strict_types=1);

namespace App\Message;

class Message
{
   private string $content;
   private int $code;
   private string $officerRank;

   public function __construct(string $content, int $code, string $officerRank)
   {
      $this->content = $content;
      $this->code = $code;
      $this->officerRank = $officerRank;
   }

   public function getContent()
   {
      return $this->content;
   }

   public function getCode()
   {
      return $this->code;
   }

   public function getOfficerRank()
   {
      return $this->officerRank;
   }
}