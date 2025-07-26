<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PassportElementErrorSource types
 */
abstract class PassportElementErrorSource implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
