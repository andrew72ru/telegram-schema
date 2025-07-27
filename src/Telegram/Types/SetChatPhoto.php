<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the photo of a chat. Supported only for basic groups, supergroups and channels. Requires can_change_info member right.
 */
class SetChatPhoto extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** New chat photo; pass null to delete the chat photo */
        #[SerializedName('photo')]
        private InputChatPhoto|null $photo = null,
    ) {
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get New chat photo; pass null to delete the chat photo.
     */
    public function getPhoto(): InputChatPhoto|null
    {
        return $this->photo;
    }

    /**
     * Set New chat photo; pass null to delete the chat photo.
     */
    public function setPhoto(InputChatPhoto|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatPhoto',
            'chat_id' => $this->getChatId(),
            'photo' => $this->getPhoto(),
        ];
    }
}
