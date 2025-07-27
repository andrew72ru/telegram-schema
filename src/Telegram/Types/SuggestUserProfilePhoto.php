<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Suggests a profile photo to another regular user with common messages and allowing non-paid messages.
 */
class SuggestUserProfilePhoto extends Ok implements \JsonSerializable
{
    public function __construct(
        /** User identifier */
        #[SerializedName('user_id')]
        private int $userId,
        /** Profile photo to suggest; inputChatPhotoPrevious isn't supported in this function */
        #[SerializedName('photo')]
        private InputChatPhoto|null $photo = null,
    ) {
    }

    /**
     * Get User identifier.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set User identifier.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Profile photo to suggest; inputChatPhotoPrevious isn't supported in this function.
     */
    public function getPhoto(): InputChatPhoto|null
    {
        return $this->photo;
    }

    /**
     * Set Profile photo to suggest; inputChatPhotoPrevious isn't supported in this function.
     */
    public function setPhoto(InputChatPhoto|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'suggestUserProfilePhoto',
            'user_id' => $this->getUserId(),
            'photo' => $this->getPhoto(),
        ];
    }
}
