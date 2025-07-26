<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Suggests the user to set profile photo
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
