<?php
namespace App\Models;

use CodeIgniter\Model;

class Mvoto extends Model
{
    protected $table      = 'votos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['candidato_id'];
    public $timestamps = false; // Utilizamos el DEFAULT CURRENT_TIMESTAMP en la base de datos
}

?>