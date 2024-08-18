<?php
use App\Controllers\UserController;
return [
  "/user" => [UserController::class, "index"],
  "/user/profile" => [UserController::class, "edit"],
];
