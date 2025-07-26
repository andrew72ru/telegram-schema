<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for EmailAddressAuthentication types
 */
abstract class EmailAddressAuthentication implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
