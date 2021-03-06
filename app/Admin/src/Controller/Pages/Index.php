<?php

namespace Admin\Controller\Pages;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class Index
{
    public function get(Request $request, Application $app)
    {
        return $app['twig']->render('index.php');
    }
}