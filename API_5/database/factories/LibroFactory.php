<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genres = ['Drama', 'Comedia', 'Ciencia Ficción', 'Romance'];

        return [
            'titulo' => $this->faker->sentence(3),
            'autor' => $this->faker->name,
            'publicacion' => $this->faker->year,  //faker tambien puede llamarse poniendo fake()
            'genero' => $genres[array_rand($genres)], //Aqui hemos creado antes nuestra prpia "libreria" en un array dentro de la variable genres
        ];
    }
}
