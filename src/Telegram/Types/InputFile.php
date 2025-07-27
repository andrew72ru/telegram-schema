<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for InputFile types.
 */
abstract class InputFile implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
