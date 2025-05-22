<?php

namespace App\Business;

class CountryBusiness
{
  public function isValidContinent($continent) {
    $valid = false;
    if ($continent === 'Africa' || $continent == 'Asia'    ||
     $continent == 'Europe'  || $continent == 'America' ||
     $continent == 'Oceania' || $continent == 'Antarctica')
    {
      $valid = true;
    }
    return $valid;
  }
}
