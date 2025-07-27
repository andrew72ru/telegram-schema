<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ChatBoostSource types.
 */
abstract class ChatBoostSource implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
