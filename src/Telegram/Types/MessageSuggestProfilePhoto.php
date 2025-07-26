<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A profile photo was suggested to a user in a private chat @photo The suggested chat photo. Use the method setProfilePhoto with inputChatPhotoPrevious to apply the photo
 */
class MessageSuggestProfilePhoto extends MessageContent implements \JsonSerializable
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
            '@type' => 'messageSuggestProfilePhoto',
            'photo' => $this->getPhoto(),
        ];
    }
}
