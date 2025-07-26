<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a new notification sound to the list of saved notification sounds. The new notification sound is added to the top of the list. If it is already in the list, its position isn't changed @sound Notification sound file to add
 */
class AddSavedNotificationSound extends NotificationSound implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sound')]
        private InputFile|null $sound = null,
    ) {
    }

    public function getSound(): InputFile|null
    {
        return $this->sound;
    }

    public function setSound(InputFile|null $sound): self
    {
        $this->sound = $sound;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addSavedNotificationSound',
            'sound' => $this->getSound(),
        ];
    }
}
