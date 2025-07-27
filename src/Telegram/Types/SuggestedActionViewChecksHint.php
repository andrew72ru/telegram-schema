<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Suggests the user to view a hint about the meaning of one and two check marks on sent messages.
 */
class SuggestedActionViewChecksHint extends SuggestedAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'suggestedActionViewChecksHint',
        ];
    }
}
