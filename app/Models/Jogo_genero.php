<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Generos;

class Jogo_genero extends Model
{
    protected $table = 'Jogo_genero';

    protected $fillable = [
        'jogo_genero_id',
        'fk_jogo_genero_to_genero',
        'fk_jogo_genero_to_jogos'
    ];

    public $timestamps = false;

    public function genero()
    {
        return $this->belongsTo(Generos::class, 'fk_jogo_genero_to_genero', 'id_genero');
    }
    public function joog(){
        return $this->belongsTo(Jogos::class, 'fk_jogo_genero_to_jogos','id_jogo');
    }
}
