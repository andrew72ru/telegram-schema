<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for CallServerType types
 */
abstract class CallServerType implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
