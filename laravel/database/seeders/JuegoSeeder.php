<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Juego;
use App\Models\Tag;

class JuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Crear etiquetas
        $tagRPG = Tag::firstOrCreate(['nombre' => 'RPG']);// si existe no lo crea y si no existe lo crea
        $tagAccion = Tag::firstOrCreate(['nombre' => 'Accion']);

        Juego::create([
            'titulo' => 'Starcratf 3',
            'descripcion' => 'Juego clasico de estrategia',
            'anio_lanzamiento' => 2004,
            'tags' =>[$tagRPG->_id]// guardamos el _id asignado por MongoDB
        ]);

        Juego::create([
            'titulo' => 'Cyberpunk 2077',
            'descripcion' => 'Juego de accion futurista',
            'anio_lanzamiento' => 2019,
            'tags' =>[$tagRPG->_id, $tagAccion->_id]
        ]);
    }
}
