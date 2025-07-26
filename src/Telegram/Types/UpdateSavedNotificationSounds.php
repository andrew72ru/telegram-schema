<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of saved notification sounds was updated. This update may not be sent until information about a notification sound was requested for the first time @notification_sound_ids The new list of identifiers of saved notification sounds
 */
class UpdateSavedNotificationSounds extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('notification_sound_ids')]
        private array|null $notificationSoundIds = null,
    ) {
    }

    public function getNotificationSoundIds(): array|null
    {
        return $this->notificationSoundIds;
    }

    public function setNotificationSoundIds(array|null $notificationSoundIds): self
    {
        $this->notificationSoundIds = $notificationSoundIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateSavedNotificationSounds',
            'notification_sound_ids' => $this->getNotificationSoundIds(),
        ];
    }
}
