<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for SuggestedAction types.
 */
abstract class SuggestedAction implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
