<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for ResetPasswordResult types.
 */
abstract class ResetPasswordResult implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
