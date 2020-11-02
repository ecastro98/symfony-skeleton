<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function __invoke()
    {
        return new Response('Hello world!');
    }

    public static function sum(int $a, int $b)
    {
        return $a + $b;
    }
}