<div>
  <span>The whole world belongs to <b>{{$owner}}.</span>
  <button wire:click='changeOwner'>Change Owner</button>


  <form wire:submit="saveCountryPlusContinent">
    <label for="country">Country</label><br>
    <input type="text" wire:model="country"><br>
    <label for="continent">Continent</label><br>
    <input type="text" wire:model="continent"><br>
    <button type="submit">Save</button>
  </form>
</div>
