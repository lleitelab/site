<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app['env'] = isset($_ENV['env'])? $_ENV['env'] : 'dev';

// initialize avaliable routes of modules
$path = realpath(__DIR__);


try {
    if (! realpath($path.'/../templates')) {
            $templatesPath = $path . '/../templates';
            throw new Exception("Templates path not found in [{$templatesPath}]: ", 987);

    }
    // initialize Twig
    $app->register(new Silex\Provider\TwigServiceProvider(), [
        'twig.path' => $path.'/../templates',
    ]);

    $modulesDir = new DirectoryIterator($path);

    // finding route file in modules
    foreach ($modulesDir as $dir) {
        if ($dir->isDir() && !$dir->isDot()) {
            $routesFile = $dir->getPathname() . '/routes.php';
            $initFile   = $dir->getPathname() . '/init.php';

            if (file_exists($routesFile)) {
                include $routesFile;
            }

            if (file_exists($initFile)) {
                include $initFile;
            }
        }
    }

    if ('test' === $app['env']) {
        return $app;
    }

    $app->run();

} catch (\Exception $e) {
    echo $e->getMessage();
}