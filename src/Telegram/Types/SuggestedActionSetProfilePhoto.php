<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Suggests the user to set profile photo.
 */
class SuggestedActionSetProfilePhoto extends SuggestedAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'suggestedActionSetProfilePhoto',
        ];
    }
}
