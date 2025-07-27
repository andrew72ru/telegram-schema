<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for FirebaseAuthenticationSettings types.
 */
abstract class FirebaseAuthenticationSettings implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
