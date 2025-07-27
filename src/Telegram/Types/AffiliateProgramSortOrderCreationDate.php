<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The affiliate programs must be sorted by creation date.
 */
class AffiliateProgramSortOrderCreationDate extends AffiliateProgramSortOrder implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'affiliateProgramSortOrderCreationDate',
        ];
    }
}
