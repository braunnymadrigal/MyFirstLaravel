<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\CountryController;

class CreateCountry extends Component
{
  public $continent = 'ayaya';
  public function render()
  {
    $instance = new CountryController;
    //$instance->doStuff();
    return view('livewire.createCountry');
  }

  public function changeOwner() {
    if($this->continent === 'ayaya') {
      $this->continent = 'manin';
    } else {
      $this->continent = 'ayaya';
    }
  }
}
