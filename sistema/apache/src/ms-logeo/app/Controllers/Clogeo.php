<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Models\Mlogeo;

class Clogeo extends ResourceController
{
    
    protected $modelName = 'App\Models\Mlogeo';
    protected $format    = 'json';

    private $key = "secret11"; // 🔹 Clave secreta para JWT
   
    public function login()
    {
        $json = $this->request->getJSON();
        $usuario = $json->usuario ?? null;
        $password = $json->password ?? null;

        $user = $this->model->verificarUsuario($usuario, $password);

        if ($user) {
            $payload = [
                'iss' => "clave11", // 🔹 Este debe coincidir con el 'key' en Kong
                'aud' => "apache",
                'iat' => time(),
                'exp' => time() + 3600, // 🔹 Expira en 1 hora
                'data' => [
                    'usu_codigo' => $user['usu_codigo'],
                    'usu_name' => $user['usu_name'],
                    'usu_tipo' => $user['usu_tipo']
                ]
            ];

            // 🔹 Asegurar que la clave secreta es correcta 
            if ($this->key !== "secret11") {
                return $this->respond(["status" => "error", "message" => "Clave secreta incorrecta."], 500);
            }

            // 🔹 Generar el token JWT
            $jwt = JWT::encode($payload, $this->key, 'HS256');

            // 🔹 Verificar que el token sea válido
            return $this->respond([
                'status' => 'success',
                'token' => $jwt, // 🔹 Aquí imprimimos el token generado
                'decoded_token' => $payload, // 🔹 Esto nos ayuda a verificar el contenido antes de ser codificado
                'usuario' => [
                    'usu_name' => $user['usu_name'] ?? 'Usuario',
                    'usu_tipo' => $user['usu_tipo'] ?? 'Desconocido'
                ]
            ]);
        }

        return $this->failUnauthorized('Credenciales incorrectas');
    }



    
}

