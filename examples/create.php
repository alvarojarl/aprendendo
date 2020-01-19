<?php

require __DIR__."/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\adress;

$user = new User();
$user->first_name = "pradon";
$user->last_name = "pandragon";
$user->genre = "M";
$user->save();


var_dump($user);
