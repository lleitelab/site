<?php

namespace Admin\Controller\Pages;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class Login
{
    public function get(Request $request, Application $app)
    {
        return $app['twig']->render('pages/login_cadastro.php');
    }
}