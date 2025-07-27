<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for EmailAddressResetState types.
 */
abstract class EmailAddressResetState implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
