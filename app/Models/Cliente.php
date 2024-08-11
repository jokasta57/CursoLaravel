<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente';
    protected $primarykey = 'id';
    protected $connection = 'mysql';
    protected $fillable = [
        'id',
        'nombre',
        'ciudad',
        'direccion',
        'edad',
        'telefono'
    ];
}
