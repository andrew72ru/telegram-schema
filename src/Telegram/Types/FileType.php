<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for FileType types
 */
abstract class FileType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
