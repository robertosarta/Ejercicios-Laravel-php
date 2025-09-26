<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'anio_lanzamiento', 'tags'];
    
    protected $casts = ['tags' => 'array'];

    public function tags() {
        $tagsIds = json_decode(
            $this->attributes['tags'] ?? '[]', true
        );
    }
}
