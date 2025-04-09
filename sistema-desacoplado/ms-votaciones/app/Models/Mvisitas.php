<?php
namespace App\Models;

use CodeIgniter\Model;

class Mvisitas extends Model {
    protected $table = 'visitas_vis';
    protected $primaryKey = 'vis_codigo';
    protected $allowedFields = ['vis_ip', 'vis_url', 'vis_fecha'];
}