<?php

declare(strict_types=1);

namespace Celadna\Website\Controller\Urad\Dokumenty;

use Celadna\Website\Content\Content;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UzemniStudieController extends AbstractController
{
    public function __construct(
        private Content $contentProvider
    ) {}


    #[Route('/obecni-urad/dokumenty-uradu/uzemni-studie', name: 'urad_dokumenty_uzemni_studie')]
    public function __invoke(): Response
    {
        return $this->render('urad_dokumenty_uzemni_studie.html.twig', [
            'uzemni_studie' => $this->contentProvider->getUzemniStudieData(),
            'footer' => $this->contentProvider->getFooterData(),
        ]);
    }
}
