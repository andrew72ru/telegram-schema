<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for UserPrivacySettingRule types
 */
abstract class UserPrivacySettingRule implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
