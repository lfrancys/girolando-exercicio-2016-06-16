<?php

namespace Segundo\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pessoa extends Authenticatable
{
    protected $table = 'Usuario';

    protected $primaryKey = 'idUsuario';

    protected $fillable = [
        'nomeUsuario', 'emailUsuario', 'telefoneUsuario', 'statusUsuario', 'password'
    ];
}
