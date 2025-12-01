<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Generos extends Model
{
    protected $table = 'Jogos';

    protected $fillable = [
        'id_jogo',
        'nome_jogo',
        'valor',
        'id_genero',
        'description'
    ];

    public function Jogos()
    {
        return $this->hasMany(Generos::class, 'id_genero');
        return $this->belongsTo(Jogo_genero::class, 'id_jogo');
    }

    public $timestamps = false;
}
