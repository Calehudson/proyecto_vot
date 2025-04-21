<?php
namespace App\Models;
use CodeIgniter\Model;

class Mvotos extends Model {
    protected $table = 'votos_vot';
    protected $primaryKey = 'vot_codigo';
    protected $allowedFields = ['par_codigo', 'vot_ip', 'created_at'];
}
