<?php

declare(strict_types=1);

namespace Celadna\Website\Controller\Urad\Dokumenty;

use Celadna\Website\Content\Content;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class NavodyController extends AbstractController
{
    public function __construct(
        private Content $contentProvider
    ) {}


    #[Route('/obecni-urad/dokumenty-uradu/navody', name: 'urad_dokumenty_navody')]
    public function __invoke(): Response
    {
        return $this->render('urad_dokumenty_navody.html.twig', [
            'dokumenty' => $this->contentProvider->getDokumentyNavodyData(),
            'footer' => $this->contentProvider->getFooterData(),
        ]);
    }
}
