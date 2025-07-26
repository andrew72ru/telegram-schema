<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of notification sounds @notification_sounds A list of notification sounds
 */
class NotificationSounds implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('notification_sounds')]
        private array|null $notificationSounds = null,
    ) {
    }

    public function getNotificationSounds(): array|null
    {
        return $this->notificationSounds;
    }

    public function setNotificationSounds(array|null $notificationSounds): self
    {
        $this->notificationSounds = $notificationSounds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'notificationSounds',
            'notification_sounds' => $this->getNotificationSounds(),
        ];
    }
}
