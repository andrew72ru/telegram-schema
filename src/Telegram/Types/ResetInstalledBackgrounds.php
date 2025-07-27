<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Resets list of installed backgrounds to its default value.
 */
class ResetInstalledBackgrounds extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'resetInstalledBackgrounds',
        ];
    }
}
