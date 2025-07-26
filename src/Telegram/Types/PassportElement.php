<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PassportElement types
 */
abstract class PassportElement implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
