<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns the list of saved notification sounds. If a sound isn't in the list, then default sound needs to be used.
 */
class GetSavedNotificationSounds extends NotificationSounds implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getSavedNotificationSounds',
        ];
    }
}
