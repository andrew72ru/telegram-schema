<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PremiumFeature types
 */
abstract class PremiumFeature implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
