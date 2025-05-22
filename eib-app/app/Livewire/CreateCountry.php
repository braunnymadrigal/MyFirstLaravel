<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\CountryController;

class CreateCountry extends Component
{
  public $owner = 'ayaya';
  public function render()
  {
    $instance = new CountryController;
    //$instance->doStuff();
    return view('livewire.createCountry');
  }

  public function changeOwner() {
    if($this->owner === 'ayaya') {
      $this->owner = 'manin';
    } else {
      $this->owner = 'ayaya';
    }
  }

  public function saveCountryPlusContinent() {
    echo($continent);
  }
}
