<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for AffiliateType types.
 */
abstract class AffiliateType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
