<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Jogos;
use App\Models\User;

class Wishlist extends Model
{
    protected $table = 'Wishlist';

    protected $fillable = [
        'id_wishlist',
        'fk_wishlist_to_user',
        'fk_wishlist_to_jogos',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'fk_wishlist_to_user', 'user_id');
    }
    public function jogo()
    {
        return $this->belongsTo(Jogos::class, 'fk_wishlist_to_jogos','id_jogo');
    }
}
