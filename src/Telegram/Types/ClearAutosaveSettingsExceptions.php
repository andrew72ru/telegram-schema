<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Clears the list of all autosave settings exceptions. The method is guaranteed to work only after at least one call to getAutosaveSettings.
 */
class ClearAutosaveSettingsExceptions extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'clearAutosaveSettingsExceptions',
        ];
    }
}
