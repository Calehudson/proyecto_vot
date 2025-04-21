<?php

namespace App\Models;

use CodeIgniter\Model;

class Mvotaciones extends Model{


    public function obtenerVotopuesto($codpar) {

        $info = $this->db->query("with votos_totales AS (
            SELECT 
                p.par_codigo, 
                p.par_nombre, 
                p.par_apellidos, 
                p.par_foto,
                COALESCE(v.votos, 0) AS votos,
                GROUP_CONCAT(c.cat_descripcion ORDER BY c.cat_descripcion ASC SEPARATOR ', ') AS categorias
            FROM participantes_par p
            LEFT JOIN (
                SELECT par_codigo, COUNT(vot_codigo) AS votos 
                FROM votos_vot 
                GROUP BY par_codigo
            ) v ON p.par_codigo = v.par_codigo
            LEFT JOIN categoria_cat c ON p.par_codigo = c.par_codigo
            GROUP BY p.par_codigo, p.par_nombre, p.par_apellidos, p.par_foto, v.votos
        ),
        ranking AS (
            SELECT 
                par_codigo,
                par_nombre,
                par_apellidos,
                par_foto,
                votos,
                categorias,
                DENSE_RANK() OVER (ORDER BY votos DESC) AS puesto -- 🔹 Usa DENSE_RANK en lugar de RANK
            FROM votos_totales
        )
        SELECT * FROM ranking
        WHERE par_codigo ='".$codpar."'");
        return $info->getResultArray();
    }

    public function obtenerPorcentajevotos() {

        $info = $this->db->query("with votos_hasta_penultima AS (
                    SELECT 
                        par_codigo, 
                        COUNT(vot_codigo) AS votos_hasta_penultima
                    FROM votos_vot
                    WHERE created_at < DATE_SUB(NOW(), INTERVAL 7 DAY)  -- 🔹 Hasta la penúltima semana
                    GROUP BY par_codigo
                ),
                votos_hasta_hoy AS (
                    SELECT 
                        par_codigo, 
                        COUNT(vot_codigo) AS votos_hasta_hoy
                    FROM votos_vot
                    GROUP BY par_codigo
                ),
                total_votos_penultima AS (
                    SELECT COUNT(vot_codigo) AS total FROM votos_vot WHERE created_at < DATE_SUB(NOW(), INTERVAL 7 DAY)
                ),
                total_votos_hoy AS (
                    SELECT COUNT(vot_codigo) AS total FROM votos_vot
                )
                SELECT 
                    p.par_codigo, 
                    p.par_nombre, 
                    p.par_apellidos, 
                    COALESCE(vp.votos_hasta_penultima, 0) AS votos_hasta_penultima,
                    ROUND((COALESCE(vp.votos_hasta_penultima, 0) / NULLIF(tp.total, 0)) * 100, 2) AS porcentaje_hasta_penultima,
                    COALESCE(vh.votos_hasta_hoy, 0) AS votos_hasta_hoy,
                    ROUND((COALESCE(vh.votos_hasta_hoy, 0) / NULLIF(th.total, 0)) * 100, 2) AS porcentaje_hasta_hoy
                FROM participantes_par p
                LEFT JOIN votos_hasta_penultima vp ON p.par_codigo = vp.par_codigo
                LEFT JOIN votos_hasta_hoy vh ON p.par_codigo = vh.par_codigo
                CROSS JOIN total_votos_penultima tp
                CROSS JOIN total_votos_hoy th
                ORDER BY p.par_codigo ASC");
        return $info->getResultArray();
    }

    public function obtenerTotaldatos() {

        $info = $this->db->query("select
            (SELECT COUNT(par_codigo) FROM votos_vot) AS totvotos,
            (SELECT COUNT(DISTINCT(vis_ip)) FROM visitas_vis) AS totvisitas,
            (SELECT COUNT(vis_codigo) FROM visitas_vis) AS totinter");
        return $info->getResultArray();
    }

    public function obtenerVotaciones() {
        $builder = $this->db->table('votos_vot a')
                            ->select("vot_codigo, CONCAT(par_nombre, ' ', par_apellidos) AS participante, vot_ip, created_at AS fecha")
                            ->join('participantes_par b', 'a.par_codigo = b.par_codigo', 'inner')
                            ->orderBy('created_at', 'DESC');
    
        return $builder->get(100)->getResultArray(); // 🔹 Fuerza a recuperar 100 registros
    }

    public function eliminarVoto($vot_codigo)
    {
        return $this->db->table('votos_vot')->where('vot_codigo', $vot_codigo)->delete();
    }


}