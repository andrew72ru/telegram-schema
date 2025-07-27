<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for BotCommandScope types.
 */
abstract class BotCommandScope implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
