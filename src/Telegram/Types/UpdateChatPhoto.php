<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat photo was changed @chat_id Chat identifier @photo The new chat photo; may be null.
 */
class UpdateChatPhoto extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('photo')]
        private ChatPhotoInfo|null $photo = null,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function getPhoto(): ChatPhotoInfo|null
    {
        return $this->photo;
    }

    public function setPhoto(ChatPhotoInfo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatPhoto',
            'chat_id' => $this->getChatId(),
            'photo' => $this->getPhoto(),
        ];
    }
}
