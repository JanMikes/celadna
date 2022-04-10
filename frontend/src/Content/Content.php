<?php

declare(strict_types=1);

namespace Celadna\Website\Content;

use Celadna\Website\Content\Data\AktualitaData;
use Celadna\Website\Content\Data\FooterData;
use Celadna\Website\Content\Data\GdprData;
use Celadna\Website\Content\Data\DokumentyData;
use Celadna\Website\Content\Data\GrafickyPasData;
use Celadna\Website\Content\Data\KontaktyData;
use Celadna\Website\Content\Data\ObecData;
use Celadna\Website\Content\Data\PristupnostData;
use Celadna\Website\Content\Data\RestauraceData;
use Celadna\Website\Content\Data\SamospravaData;
use Celadna\Website\Content\Data\SekceSDlazdicemaData;
use Celadna\Website\Content\Data\SluzbyData;
use Celadna\Website\Content\Data\StrukturaUraduData;
use Celadna\Website\Content\Data\UbytovaniData;
use Celadna\Website\Content\Data\UradData;
use Celadna\Website\Content\Data\UredniDeskaData;
use Celadna\Website\Content\Data\UzemniData;

interface Content
{
    /**
     * @return array<FooterData>
     */
    public function getFooterData(): array;

    public function getRestauraceData(): RestauraceData;

    /**
     * @return array<GrafickyPasData>
     */
    public function getAktivityData(): array;

    /**
     * @return array<GrafickyPasData>
     */
    public function getOrganizaceData(): array;

    public function getSluzbyData(): SluzbyData;

    /**
     * @return array<AktualitaData>
     */
    public function getAktualityData(int|null $limit = null): array;

    public function getAktualitaData(int $id): AktualitaData;

    public function getGdprData(): GdprData;

    public function getUbytovaniData(): UbytovaniData;

    /**
     * @return array<GrafickyPasData>
     */
    public function getVyletyData(): array;

    public function getPristupnostData(): PristupnostData;

    public function getDokumentyFormulareData(): DokumentyData;

    public function getDokumentyNavodyData(): DokumentyData;

    public function getDokumentyOdpadyData(): DokumentyData;

    public function getDokumentyRozpoctyData(): DokumentyData;

    public function getDokumentyStrategickeDokumentyData(): DokumentyData;

    public function getUzemniPlanData(): UzemniData;

    public function getUzemniStudieData(): UzemniData;

    public function getDokumentyVyhlaskyData(): DokumentyData;

    public function getDokumentyVyrocniZpravaData(): DokumentyData;

    public function getDokumentyZivotniSituaceData(): DokumentyData;

    public function getDokumentyPovinneInformaceData(): DokumentyData;

    public function getDokumentyVerejnopravniSmlouvyData(): DokumentyData;

    /**
     * @return array<SamospravaData>
     */
    public function getSamospravaData(): array;

    public function getKontaktyData(): KontaktyData;

    public function getStrukturaUraduData(): StrukturaUraduData;

    public function getUradData(): UradData;

    /**
     * @return array<UredniDeskaData>
     */
    public function getUredniDeskyData(string|null $categoryField = null, int|null $limit = null): array;

    public function getUredniDeskaData(int $id): UredniDeskaData;

    public function getDokumentyUraduData(): SekceSDlazdicemaData;

    public function getObecData(): ObecData;
}
