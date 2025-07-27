<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for PhoneNumberCodeType types.
 */
abstract class PhoneNumberCodeType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
