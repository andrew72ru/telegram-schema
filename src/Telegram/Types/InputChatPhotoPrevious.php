<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A previously used profile photo of the current user @chat_photo_id Identifier of the current user's profile photo to reuse.
 */
class InputChatPhotoPrevious extends InputChatPhoto implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_photo_id')]
        private int $chatPhotoId,
    ) {
    }

    public function getChatPhotoId(): int
    {
        return $this->chatPhotoId;
    }

    public function setChatPhotoId(int $chatPhotoId): self
    {
        $this->chatPhotoId = $chatPhotoId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputChatPhotoPrevious',
            'chat_photo_id' => $this->getChatPhotoId(),
        ];
    }
}
