<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes a notification sound from the list of saved notification sounds @notification_sound_id Identifier of the notification sound.
 */
class RemoveSavedNotificationSound extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('notification_sound_id')]
        private int $notificationSoundId,
    ) {
    }

    public function getNotificationSoundId(): int
    {
        return $this->notificationSoundId;
    }

    public function setNotificationSoundId(int $notificationSoundId): self
    {
        $this->notificationSoundId = $notificationSoundId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'removeSavedNotificationSound',
            'notification_sound_id' => $this->getNotificationSoundId(),
        ];
    }
}
