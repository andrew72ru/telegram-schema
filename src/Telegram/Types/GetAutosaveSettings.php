<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns autosave settings for the current user
 */
class GetAutosaveSettings extends AutosaveSettings implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getAutosaveSettings',
        ];
    }
}
