<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use HasFactory;

    protected $table = 'tblclientes';
    protected $primarykey ='idCliente';

    public function usuario(){
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }
}
