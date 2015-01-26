<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

$app->get('/admin/login', "Admin\\Controller\\Pages\\Login::get");

$app->get('/admin/', "Admin\\Controller\\Pages\\Index::get")
    ->before(function (Request $request) {
        return new RedirectResponse('/admin/login');
    });