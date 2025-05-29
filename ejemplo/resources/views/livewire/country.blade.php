<div>
  <span>The whole world belongs to <b>{{$owner}}</b>.</span>
  <br>
  <button wire:click='changeOwner'>Change Owner</button>
  <br>
  <br>


  <div wire:show="showCreateCountry">
    <dialog open>
      <div>
        <form wire:submit="createCountry">
          <label for="country">Nombre del país</label><br>
          <input type="text" wire:model="country"><br>
          <label for="continent">Continente</label><br>
          <input type="text" wire:model="continent"><br>
          <button type="submit">Crear</button>
        </form>
      </div>

      <div wire:show="showErrorCreation">
        <b>No es posible crear ese país.</b>
      </div>
      <br>
      <br>

      <div>
        <button x-on:click="$wire.showCreateCountry = false">Cerrar</button>
      </div>
    </dialog>
  </div>


  <div wire:show="showEditCountry">
    <dialog open>
      <div>
        <form wire:submit="editCountry">
          <label for="country">Nombre del país</label><br>
          <input type="text" wire:model="country"><br>
          <label for="continent">Continente</label><br>
          <input type="text" wire:model="continent"><br>
          <button type="submit">Editar</button>
        </form>
      </div>
      <br>
      <br>

      <div>
        <button x-on:click="$wire.showEditCountry = false">Cerrar</button>
      </div>
    </dialog>
  </div>

  <!-- <div wire:show="!showCreateCountry">
    <button x-on:click="$wire.showCreateCountry = true">Crear país</button>
  </div> -->

  <div wire:show="!showCreateCountry">
    <button wire:click='showModalCreateCountry'>Crear país</button>
  </div>

  <h2>Lista de países</h2>
  <table>
    <tr>
      <th>Nombre</th>
      <th>Continente</th>
      <th>Eliminar</th>
      <th>Editar</th>
    </tr>

    @foreach($myCountries as $myCountry)
      <tr>
        <td>{{$myCountry['name']}}</td>
        <td>{{$myCountry['continent']}}</td>
        <td><button wire:click="deleteCountryById({{ $myCountry['id'] }})">eliminar</button></td>
        <td><button wire:click="editCountryById({{$myCountry['id']}}, '{{ $myCountry['name'] }}', '{{$myCountry['continent']}}')">editar</button></td>
      </tr>
    @endforeach
  </table>

  {{ $myCountries->links() }}
</div>