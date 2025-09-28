<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Tag extends Model
{
    protected $connection = 'mongodb';  //Estamos declarandolo pero como mongodb es la predefinida en este caso no haria falta. Laravel siempre va a la predefinida a no se que lo especifiques
    protected $fillable = ['nombre'];

    protected static function boot() {
        parent::boot();

        static::deleting(function ($tag) {
            // Obtenemos el ID del tag que se está eliminando
            $tagId = $tag->_id;
            $juegosConTag = Juego::whereJsonContains('tags', $tagId)->get();

            foreach ($juegosConTag as $juego) {
                $rawTags = $juego->attributes['tags'] ?? '[]';
                $decodedOnce = json_decode($rawTags, true); // Devuelve un string: '["67fa4ffbb99f8a24590822f2"]'
                $tagIds = is_string($decodedOnce) ? json_decode($decodedOnce, true) : $decodedOnce;

                // Filtramos para eliminar el ID del tag que se está eliminando
                $updatedTagIds = array_filter($tagIds, fn($id) => $id !== $tagId);

                // Actualizamos el campo tags del juego
                $juego->tags = array_filter($juego->tags, fn($tag) => $tag !== $tagId);
                $juego->save();
            }
        });
    }
}
