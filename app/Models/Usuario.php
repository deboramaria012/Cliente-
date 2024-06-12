<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'tblusuarios';
    protected $primaryKey = 'idUsuario'; // Nome correto da chave primária

    // Definindo as colunas que podem ser atribuídas em massa
    protected $fillable = [
        'nomeUsuario',
        'emailUsuario',
        'senhaUsuario',
        'telefoneUsuario',
        'tipo_usuario_id',
        'tipo_usuario_type',
        'created_at',
        'updated_at'
    ];

    // Ocultando colunas sensíveis
    protected $hidden = [
        'senhaUsuario',
    ];

    // Relacionamento com o tipo de usuário (polimórfico)
    public function tipo_usuario()
    {
        return $this->morphTo('tipo_usuario', 'tipo_usuario_type', 'tipo_usuario_id');
    }

    // Definindo um mutator para hash da senha
    public function setSenhaUsuarioAttribute($value)
    {
        $this->attributes['senhaUsuario'] = Hash::make($value);
    }
}
