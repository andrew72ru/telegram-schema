<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for LogStream types
 */
abstract class LogStream implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
