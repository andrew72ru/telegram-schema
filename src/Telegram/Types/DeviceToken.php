<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for DeviceToken types
 */
abstract class DeviceToken implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
