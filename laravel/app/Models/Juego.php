<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    // indicamos los campos que van a poder ser escritos por parte del usuario
    protected $fillable = ['titulo', 'descripcion', 'anio_lanzamiento', 'tags']; 
    
    // obligamos a que sea un array ya que un juego puede tener varias etiquetas
    protected $casts = ['tags' => 'array'];


    // pedimos el campo tags y si no lo encuentra pone un array vacío para que no pete
    public function tags() {
        $tagsIds = json_decode(
            $this->attributes['tags'] ?? '[]', true
        );
    }
}
