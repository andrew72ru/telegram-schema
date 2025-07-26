<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for FirebaseDeviceVerificationParameters types
 */
abstract class FirebaseDeviceVerificationParameters implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
