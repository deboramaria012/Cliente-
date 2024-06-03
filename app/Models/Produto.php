<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // Se necessário, defina a tabela e outras configurações
    // protected $table = 'produtos';
    // protected $primaryKey = 'id';
    // public $timestamps = true;

    // Se você estiver usando campos específicos, pode defini-los aqui
    protected $fillable = ['nome', 'preco'];
}
