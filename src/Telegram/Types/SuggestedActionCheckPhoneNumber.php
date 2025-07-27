<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Suggests the user to check whether authorization phone number is correct and change the phone number if it is inaccessible.
 */
class SuggestedActionCheckPhoneNumber extends SuggestedAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'suggestedActionCheckPhoneNumber',
        ];
    }
}
