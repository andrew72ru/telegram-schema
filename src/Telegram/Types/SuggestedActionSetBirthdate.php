<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Suggests the user to set birthdate.
 */
class SuggestedActionSetBirthdate extends SuggestedAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'suggestedActionSetBirthdate',
        ];
    }
}
