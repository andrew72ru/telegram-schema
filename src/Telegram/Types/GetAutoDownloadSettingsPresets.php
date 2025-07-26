<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns auto-download settings presets for the current user
 */
class GetAutoDownloadSettingsPresets extends AutoDownloadSettingsPresets implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getAutoDownloadSettingsPresets',
        ];
    }
}
