<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for UserPrivacySetting types
 */
abstract class UserPrivacySetting implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
