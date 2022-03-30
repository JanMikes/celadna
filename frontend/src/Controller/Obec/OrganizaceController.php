<?php

declare(strict_types=1);

namespace Celadna\Website\Controller\Obec;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class OrganizaceController extends AbstractController
{
    #[Route('/obec/organizace', 'obec_organizace')]
    public function __invoke(): Response
    {
        return $this->render('obec_organizace.html.twig');
    }
}