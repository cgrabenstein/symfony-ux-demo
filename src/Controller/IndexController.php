<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
#[Route('/')]
final class IndexController extends AbstractController
{
    public function __invoke()
    {
        return $this->render('base.html.twig');
    }
}
