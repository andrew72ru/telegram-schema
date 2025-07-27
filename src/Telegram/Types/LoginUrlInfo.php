<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for LoginUrlInfo types.
 */
abstract class LoginUrlInfo implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
