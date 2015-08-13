<?php

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Scrabble.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    // Home twig link
    $app->get("/", function() use ($app))
    {
        return $app['twig']->render('index.htm.twig');
    }

    return $app;
?>
