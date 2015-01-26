<?php

use Symfony\Component\HttpFoundation\Response;
$app->get('/', "Site\\Controller\\Index::get");

$app->error(function (\Exception $e, $code) {
    var_dump($e->getMessage());
    die;
    if ($code == 404) {

    }

    return new Response($code);
});
