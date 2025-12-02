<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Jogos;

class Generos extends Model
{
    protected $table = 'Generos';

    protected $fillable = [
        'id_genero',
        'nome_genero'
    ];

    public function Generos()
    {
        return $this->hasMany(Jogo_genero::class, 'id_genero');

    }
    public $timestamps = false;
}
