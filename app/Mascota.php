<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
     protected $table = "mascotas";

    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'edad', 'tipo', 'color'];
}
