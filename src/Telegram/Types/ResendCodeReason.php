<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ResendCodeReason types
 */
abstract class ResendCodeReason implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
