<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns saved notification sound by its identifier. Returns a 404 error if there is no saved notification sound with the specified identifier @notification_sound_id Identifier of the notification sound
 */
class GetSavedNotificationSound extends NotificationSounds implements \JsonSerializable
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
            '@type' => 'getSavedNotificationSound',
            'notification_sound_id' => $this->getNotificationSoundId(),
        ];
    }
}
