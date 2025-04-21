<?php

namespace App\Models;
use CodeIgniter\Model;

class Mlogeo extends Model
{
    protected $table = 'usuarios_usu';
    protected $primaryKey = 'usu_codigo';

    public function verificarUsuario($usuario, $password)
    {
        return $this->where('usu_name', $usuario)->where('usu_pass', $password)->first();
    }
}
