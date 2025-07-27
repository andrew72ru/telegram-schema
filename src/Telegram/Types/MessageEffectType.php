<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for MessageEffectType types.
 */
abstract class MessageEffectType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
