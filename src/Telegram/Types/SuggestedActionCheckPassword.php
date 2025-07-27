<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Suggests the user to check whether they still remember their 2-step verification password.
 */
class SuggestedActionCheckPassword extends SuggestedAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'suggestedActionCheckPassword',
        ];
    }
}
