<?php

namespace Controllers;

use Exception;
use Model\Boleta;
use Model\Evaluado;
use Model\Evaluador;
use Model\Notas;
use Model\Personal;
use Model\Pregunta;
use MVC\Router;



class EmailController
{

    public static function email(Router $router)
    {


        $router->render('evaluados/index', []);
    }


    





}
