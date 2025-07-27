<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Abstract base class for AutosaveSettingsScope types.
 */
abstract class AutosaveSettingsScope implements \JsonSerializable
{
    abstract public function jsonSerialize(): array;
}
