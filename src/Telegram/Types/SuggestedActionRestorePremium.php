<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Suggests the user to restore a recently expired Premium subscription.
 */
class SuggestedActionRestorePremium extends SuggestedAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'suggestedActionRestorePremium',
        ];
    }
}
