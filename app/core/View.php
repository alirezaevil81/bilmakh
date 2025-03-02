<?php

namespace Alireza\Bilmakh\core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View
{
    public static function render($template, $data = [])
    {
        $loader = new FilesystemLoader(__DIR__ . '/../../resources/views');

        $twig = new Environment($loader, [
            'cache' => __DIR__ . '/../../storage/cache',
            'debug' => true,
        ]);

         echo $twig->render($template, $data);
    }
}