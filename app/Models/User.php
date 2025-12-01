<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $table = 'Usuarios';

    protected $fillable = [
        'user_id',
        'nome',
        'data_nascimento',
        'email',
        'cpf',
        'senha',
        'id_endereco'
    ];

    public $timestamps = false;

    public function Meus_Jogos()
    {
        return $this->hasOne(Meus_Jogos::class, 'id_meus_jogos');
    }

}
class User extends Authenticatable
{
    protected $primaryKey = 'user_id';
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'nome',
        'data_nascimento',
        'email',
        'cpf',
        'password',
        'id_endereco'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
