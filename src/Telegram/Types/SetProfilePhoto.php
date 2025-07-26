<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes a profile photo for the current user
 */
class SetProfilePhoto extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Profile photo to set */
        #[SerializedName('photo')]
        private InputChatPhoto|null $photo = null,
        /** Pass true to set the public photo, which will be visible even if the main photo is hidden by privacy settings */
        #[SerializedName('is_public')]
        private bool $isPublic,
    ) {
    }

    /**
     * Get Profile photo to set
     */
    public function getPhoto(): InputChatPhoto|null
    {
        return $this->photo;
    }

    /**
     * Set Profile photo to set
     */
    public function setPhoto(InputChatPhoto|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get Pass true to set the public photo, which will be visible even if the main photo is hidden by privacy settings
     */
    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    /**
     * Set Pass true to set the public photo, which will be visible even if the main photo is hidden by privacy settings
     */
    public function setIsPublic(bool $isPublic): self
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setProfilePhoto',
            'photo' => $this->getPhoto(),
            'is_public' => $this->getIsPublic(),
        ];
    }
}
