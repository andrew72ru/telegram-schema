<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PremiumLimitType types
 */
abstract class PremiumLimitType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
