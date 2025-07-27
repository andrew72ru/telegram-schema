<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An updated chat photo @photo New chat photo.
 */
class MessageChatChangePhoto extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('photo')]
        private ChatPhoto|null $photo = null,
    ) {
    }

    public function getPhoto(): ChatPhoto|null
    {
        return $this->photo;
    }

    public function setPhoto(ChatPhoto|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageChatChangePhoto',
            'photo' => $this->getPhoto(),
        ];
    }
}
