<?php

declare(strict_types=1);

namespace App;

class GameEngine
{
   private int $hp = 100;
   private string $characterName = "";

   private static ? GameEngine $instance = null;
   private function __construct()
   {
      // private constructor prevents creating an object directly with the new operator
   }

   public static function getInstance(): GameEngine
   {
      if (GameEngine::$instance == null) {
         GameEngine::$instance = new GameEngine();
      }

      return GameEngine::$instance;
   }

   private function __clone()
   {
      // private cloning preventing copying of the object
   }

   public function __wakeup()
   {
      // private unserialization prevents the object from being recreated from the serialized string
   }
}