<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
       'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('word_count.html.twig');
    });

    $app->get("/results", function() use ($app) {
        $counter = new RepeatCounter;
        $counter_result = $counter->countRepeats($_GET['word'], $_GET['phrase']);
        return $app['twig']->render('results.html.twig', array('result' => $counter_result));
    });

    return $app;
?>
