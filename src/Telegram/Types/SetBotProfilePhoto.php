<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes a profile photo for a bot @bot_user_id Identifier of the target bot @photo Profile photo to set; pass null to delete the chat photo
 */
class SetBotProfilePhoto extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        #[SerializedName('photo')]
        private InputChatPhoto|null $photo = null,
    ) {
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    public function getPhoto(): InputChatPhoto|null
    {
        return $this->photo;
    }

    public function setPhoto(InputChatPhoto|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBotProfilePhoto',
            'bot_user_id' => $this->getBotUserId(),
            'photo' => $this->getPhoto(),
        ];
    }
}
