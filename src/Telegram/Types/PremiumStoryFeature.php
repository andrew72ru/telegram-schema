<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PremiumStoryFeature types
 */
abstract class PremiumStoryFeature implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
