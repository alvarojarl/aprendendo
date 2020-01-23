<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Adress extends DataLayer
{
  public function __construct()
  {
    parent::__construct("adresses",["user_id"],"adress_id",false);
  }

  public function add(User $user,string $street,string $number): Adress
  {
    $this->user_id = $user->id;
    $this->street = $street;
    $this->number = $number;

    return $this;
  }
}
