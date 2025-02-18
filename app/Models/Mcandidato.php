<?php
namespace App\Models;

use CodeIgniter\Model;

class Mcandidato extends Model
{
    protected $table      = 'candidatos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre'];
}

?>