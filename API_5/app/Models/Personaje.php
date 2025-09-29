<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaje
{
    public $name;
    public $status;
    public $gender;

    public function __construct($name, $status, $gender) {
        $this->name = $name;
        $this->status = $status;
        $this->gender = $gender;
    }
}
