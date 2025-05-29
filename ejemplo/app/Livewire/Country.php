<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\CountryController;

use App\Models\Countries;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;

class Country extends Component
{
  use WithPagination;
  public $owner = 'ayaya';
  public $status = 'default';
  public $showCreateCountry = false;
  public $showErrorCreation = false;
  public $country = "";
  public $continent = "";
  public $countryId = 0;
  public $showEditCountry = false;

  public function mount() {
    // TODO: need to research what is this used for.
  }

  public function render() {
    return view('livewire.country', [
      'myCountries' => Countries::where('status', 'active')
      ->orderBy('name')
      ->paginate(2),
    ]);
  }

  public function changeOwner() {
    if($this->owner === 'ayaya') {
      $this->owner = 'manin';
    } else {
      $this->owner = 'ayaya';
    }
  }

  public function deleteCountryById($id) {
    Countries::findOrFail($id)->update(['status' => 'deleted']);
  }

  public function editCountryById($id, $name, $continent) {
    $this->countryId = $id;
    $this->country = $name;
    $this->continent = $continent;
    $this->showEditCountry = true;
  }

  public function createCountry() {
    if ($this->country !== "" && $this->continent !== "") {
      $this->showCreateCountry = false;
      $currentCountry = Countries::firstOrCreate(
        ['name' => $this->country], 
        ['continent' => $this->continent]
      );
      if ($currentCountry->wasRecentlyCreated === true) {
        // item wasn't found and have been created in the database
      } else {
        // item was found and returned from the database
        $currentStatus = $currentCountry->status;
        if ($currentStatus === "active") {
          $this->showErrorCreation = true;
          $this->showCreateCountry = true;
        } else {
          Countries::where('name', $this->country)->firstOrFail()->update(['status' => 'active', 'continent' => $this->continent]);
        }
      }
    } else {
      $this->showErrorCreation = true;
    }
  }

  public function showModalCreateCountry() {
    $this->showCreateCountry = true;
    $this->showErrorCreation = false; 
  }

  public function editCountry() {
    $this->validate([
      'country' => [
        'required',
        'string',
        'max:200',
        Rule::unique('countries', 'name')->ignore($this->countryId),
      ],
      'continent' => 'required|string|max:100',
    ]);

    $country = Countries::findOrFail($this->countryId);
    $country->name = $this->country;
    $country->continent = $this->continent;
    // $country = [
    //   name => $this->country,
    //   contine
    // ]
    $country->save();

    $this->showEditCountry = false;
  }
}
