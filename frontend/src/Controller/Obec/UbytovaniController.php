<?php

declare(strict_types=1);

namespace Celadna\Website\Controller\Obec;

use Celadna\Website\Content\Content;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UbytovaniController extends AbstractController
{
    public function __construct(
        private Content $contentProvider
    ) {}


    #[Route('/obec/ubytovani', name: 'obec_ubytovani')]
    public function __invoke(): Response
    {
        return $this->render('obec_ubytovani.html.twig', [
            'ubytovani' => $this->contentProvider->getUbytovaniData(),
            'footer' => $this->contentProvider->getFooterData(),
        ]);
    }
}
