<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use HasFactory;

    protected $table = 'tblclientes';
    protected $primaryKey = 'idCliente';
    protected $fillable = [
        'nomeCliente',
        'emailCliente',
        'telefoneCliente',
        'senhaCliente',
    ];

    protected $hidden = ['senhaCliente'];

    public function setSenhaClienteAttribute($password)
    {
        $this->attributes['senhaCliente'] = bcrypt($password);
    }
}
