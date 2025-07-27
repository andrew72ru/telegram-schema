<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns saved animations.
 */
class GetSavedAnimations extends Animations implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getSavedAnimations',
        ];
    }
}
