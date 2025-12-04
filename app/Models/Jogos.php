<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jogos extends Model
{
    protected $table = 'Jogos';

    protected $fillable = [
        'id_jogo',
        'nome_jogo',
        'valor',
        'description'
    ];

    public function JogosGenero()
    {
        return $this->hasMany(Jogo_genero::class, 'id_jogo');
    }
    public function Wishlist()
    {
        return $this->hasMany(Wishlist::class, 'id_jogo');
    }

    public $timestamps = false;
}
