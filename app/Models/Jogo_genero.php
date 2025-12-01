<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogo_genero extends Model
{
    protected $table = 'Jogo_genero';

    protected $fillable = [
        'id_jogo',
        'id_genero'
    ];

    public $timestamps = false;

    public function Jogo_genero()
    {
        return $this->hasMany(Generos::class, 'id_genero');
        return $this->hasMany(Jogos::class, 'id_jogo');
    }
}
