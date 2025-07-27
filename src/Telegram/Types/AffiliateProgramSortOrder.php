<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for AffiliateProgramSortOrder types.
 */
abstract class AffiliateProgramSortOrder implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
