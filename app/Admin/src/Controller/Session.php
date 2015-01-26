<?php

namespace Admin\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class Session
{
    public function post(Request $request, Application $app)
    {
        return $app['twig']->render('index.php');
    }
}