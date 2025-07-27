<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat photo was changed @old_photo Previous chat photo value; may be null @new_photo New chat photo value; may be null.
 */
class ChatEventPhotoChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_photo')]
        private ChatPhoto|null $oldPhoto = null,
        #[SerializedName('new_photo')]
        private ChatPhoto|null $newPhoto = null,
    ) {
    }

    public function getOldPhoto(): ChatPhoto|null
    {
        return $this->oldPhoto;
    }

    public function setOldPhoto(ChatPhoto|null $oldPhoto): self
    {
        $this->oldPhoto = $oldPhoto;

        return $this;
    }

    public function getNewPhoto(): ChatPhoto|null
    {
        return $this->newPhoto;
    }

    public function setNewPhoto(ChatPhoto|null $newPhoto): self
    {
        $this->newPhoto = $newPhoto;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventPhotoChanged',
            'old_photo' => $this->getOldPhoto(),
            'new_photo' => $this->getNewPhoto(),
        ];
    }
}
