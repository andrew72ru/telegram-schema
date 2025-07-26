<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes a personal profile photo of a contact user @user_id User identifier @photo Profile photo to set; pass null to delete the photo; inputChatPhotoPrevious isn't supported in this function
 */
class SetUserPersonalProfilePhoto extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('photo')]
        private InputChatPhoto|null $photo = null,
    ) {
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

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
            '@type' => 'setUserPersonalProfilePhoto',
            'user_id' => $this->getUserId(),
            'photo' => $this->getPhoto(),
        ];
    }
}
