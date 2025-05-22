<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use App\Business\CountryBusinnes;

class CountryController
{
  public function doStuff() {
    echo("HelloFromController");
  }

  public function getFromBusiness() {
    $countryBusiness = new CountryBusiness;
    return $countryBusiness->isValidContinent();
  }

}
