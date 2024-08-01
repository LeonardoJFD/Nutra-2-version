<?php

namespace Controllers;

use MVC\Router;

class PacienteController {

    public static function index(Router $router) {
        $router->render('Paciente/perfil_paciente/index', [
            'titulo' => 'Perfil del Paciente' 
        ]);
    }
}    