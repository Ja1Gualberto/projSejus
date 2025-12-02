<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Jogos;
use App\Models\Usuarios;

class Meus_Jogos extends Model
{
    protected $table = 'Meus_Jogos';

    protected $fillable = [
        'id_meus_jogos',
        'fk_meus_jogos_to_user',
        'fk_meus_jogos_to_jogos',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'fk_meus_jogos_to_user', 'user_id');
    }
    public function jogo()
    {
        return $this->belongsTo(Jogos::class, 'fk_meus_jogos_to_jogos', 'id_jogo');
    }
}
