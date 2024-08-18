<?php

namespace App\Controllers;

class Controller
{
 public function views (string $view, $data = []){
   extract($data);
   require __DIR__ . "/../../views/{$view}.php";
 }
}
