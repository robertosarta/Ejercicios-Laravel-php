<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $connection = 'mongodb';  //Estamos declarandolo pero como mongodb es la predefinida en este caso no haria falta. Laravel siempre va a la predefinida a no se que lo especifiques
    protected $collection = 'etiquetas';  //Aqui el pone colleccion pero sera fallo 
    protected $fillable = ['nombre'];
}
