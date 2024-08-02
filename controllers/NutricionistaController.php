<?php

namespace Controllers;

use MVC\Router;

class NutricionistaController {

    public static function index(Router $router) {
        $router->render('nutricionista/perfil_nutricionista/index', [
            'titulo' => 'Perfil del Nutricionista' 
        ]);
    }
}    