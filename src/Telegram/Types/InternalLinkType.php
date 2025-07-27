<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InternalLinkType types.
 */
abstract class InternalLinkType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
