<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat background was changed @old_background Previous background; may be null if none @new_background New background; may be null if none.
 */
class ChatEventBackgroundChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_background')]
        private ChatBackground|null $oldBackground = null,
        #[SerializedName('new_background')]
        private ChatBackground|null $newBackground = null,
    ) {
    }

    public function getOldBackground(): ChatBackground|null
    {
        return $this->oldBackground;
    }

    public function setOldBackground(ChatBackground|null $oldBackground): self
    {
        $this->oldBackground = $oldBackground;

        return $this;
    }

    public function getNewBackground(): ChatBackground|null
    {
        return $this->newBackground;
    }

    public function setNewBackground(ChatBackground|null $newBackground): self
    {
        $this->newBackground = $newBackground;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventBackgroundChanged',
            'old_background' => $this->getOldBackground(),
            'new_background' => $this->getNewBackground(),
        ];
    }
}
