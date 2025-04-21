<?php

namespace App\Models;

use CodeIgniter\Model;

class Mparticipantes extends Model{


    public function obtenerParticipantes() {

        $info = $this->db->query("select p.par_codigo, p.par_nombre, p.par_apellidos, p.par_pais, p.par_sexo, p.par_edad, p.par_foto, 
                GROUP_CONCAT(c.cat_descripcion ORDER BY c.cat_descripcion ASC SEPARATOR ', ') AS categorias
            FROM participantes_par p
            LEFT JOIN categoria_cat c ON p.par_codigo = c.par_codigo
            GROUP BY p.par_codigo");
        return $info->getResultArray();
    }

}
