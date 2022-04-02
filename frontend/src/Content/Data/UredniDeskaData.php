<?php

declare(strict_types=1);

namespace Celadna\Website\Content\Data;

use DateTimeImmutable;
use DateTimeInterface;

final class UredniDeskaData
{
    use CanCreateManyFromStrapiResponse;

    public function __construct(
        public readonly string $Nadpis,
        public readonly DateTimeInterface $Datum_zverejneni,
        public readonly DateTimeInterface|null $Datum_stazeni,

        /**
         * @var array<string> $Soubory
         */
        public readonly array $Soubory,
        public readonly string $Popis,
        public readonly ClovekData|null $Zodpovedna_osoba,
    )
    {
    }

    public static function createFromStrapiResponse(array $data): self
    {
        return new self(
            $data['Nadpis'],
            DateTimeImmutable::createFromFormat('Y-m-d', $data['Datum_zverejneni']),
            $data['Datum_stazeni'] ? DateTimeImmutable::createFromFormat('Y-m-d', $data['Datum_stazeni']) : null,
            $data['Soubory']['data'] ? array_map(fn(array $souborData) => $souborData['attributes']['url'], $data['Soubory']['data']) : [],
            $data['Popis'],
            ClovekData::createFromStrapiResponse($data['Zodpovedna_osoba']['data']['attributes']),
        );
    }
}