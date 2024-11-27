<?php

declare(strict_types=1);

namespace App\Core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigConfig
{
    public static function getTwig(): Environment
    {
        $loader = new FilesystemLoader(__DIR__ . '/../views');
        return new Environment($loader);
    }
}
