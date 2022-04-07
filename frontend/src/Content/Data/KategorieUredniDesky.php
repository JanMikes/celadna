<?php

declare(strict_types=1);

namespace Celadna\Website\Content\Data;

enum KategorieUredniDesky: string
{
    case Formulare = 'Formuláře';
    case Navody = 'Návody';
    case Odpady = 'Odpady';
    case Rozpocty = 'Rozpočty';
    case Strategicke_dokumenty = 'Strategické dokumenty';
    case Uzemni_plan = 'Územní plán';
    case Uzemni_studie = 'Územní studie';
    case Vyhlasky = 'Vyhlášky';
    case Vyrocni_zpravy = 'Výroční zprávy';
    case Zivotni_situace = 'Životní situace';
    case Poskytnute_informace = 'Poskytnuté informace';
    case Verejnopravni_smlouvy = 'Veřejnoprávní smlouvy';
    case Zapisy_z_jednani_zastupitelstva = 'Zápisy z jednání zastupitelstva';
    case Usneseni_rady = 'Usnesení rady';
    case Financni_vybor = 'Finanční výbor';
    case Kulturni_komise = 'Kultirní komise';
    case Volby = 'Volby';
}
