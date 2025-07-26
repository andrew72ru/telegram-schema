<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The supergroup location was changed @old_location Previous location; may be null @new_location New location; may be null
 */
class ChatEventLocationChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_location')]
        private ChatLocation|null $oldLocation = null,
        #[SerializedName('new_location')]
        private ChatLocation|null $newLocation = null,
    ) {
    }

    public function getOldLocation(): ChatLocation|null
    {
        return $this->oldLocation;
    }

    public function setOldLocation(ChatLocation|null $oldLocation): self
    {
        $this->oldLocation = $oldLocation;

        return $this;
    }

    public function getNewLocation(): ChatLocation|null
    {
        return $this->newLocation;
    }

    public function setNewLocation(ChatLocation|null $newLocation): self
    {
        $this->newLocation = $newLocation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventLocationChanged',
            'old_location' => $this->getOldLocation(),
            'new_location' => $this->getNewLocation(),
        ];
    }
}
