<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PremiumSource types
 */
abstract class PremiumSource implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
