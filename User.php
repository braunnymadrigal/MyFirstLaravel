<?php

namespace App\Models;

// NOTAS:
// importante:
// en un por ej: x-layouts.app.sidebar
// lo de arriba esta dentro app.blade.php, que esta dentro de resources/views/components
// el x indica que es un componente de flux CREO
// todo lo de antes del punto es la ruta
// y dicha ruta obvio arranca desde donde estamos
// ya luego despues del ultimo punto es el nombre como tal del archivo.

// en teoria tengo ya los conocimientos basicos para entrarle al backend
// ahora lo que toca son los temas de front:
//  - eso seria flux para los componentes
//  - y tailwind para los estilos
//      nota: flux ya estiliza con tailwind pero puede que nosotros queramos aun mas estilos



// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->map(fn (string $name) => Str::of($name)->substr(0, 1))
            ->implode('');
    }
}
