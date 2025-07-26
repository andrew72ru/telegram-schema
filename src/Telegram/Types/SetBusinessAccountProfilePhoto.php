<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes a profile photo of a business account; for bots only
 */
class SetBusinessAccountProfilePhoto extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of business connection */
        #[SerializedName('business_connection_id')]
        private string $businessConnectionId,
        /** Profile photo to set; pass null to remove the photo */
        #[SerializedName('photo')]
        private InputChatPhoto|null $photo = null,
        /** Pass true to set the public photo, which will be visible even if the main photo is hidden by privacy settings */
        #[SerializedName('is_public')]
        private bool $isPublic,
    ) {
    }

    /**
     * Get Unique identifier of business connection
     */
    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    /**
     * Set Unique identifier of business connection
     */
    public function setBusinessConnectionId(string $businessConnectionId): self
    {
        $this->businessConnectionId = $businessConnectionId;

        return $this;
    }

    /**
     * Get Profile photo to set; pass null to remove the photo
     */
    public function getPhoto(): InputChatPhoto|null
    {
        return $this->photo;
    }

    /**
     * Set Profile photo to set; pass null to remove the photo
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
            '@type' => 'setBusinessAccountProfilePhoto',
            'business_connection_id' => $this->getBusinessConnectionId(),
            'photo' => $this->getPhoto(),
            'is_public' => $this->getIsPublic(),
        ];
    }
}
