<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes a profile photo @profile_photo_id Identifier of the profile photo to delete.
 */
class DeleteProfilePhoto extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('profile_photo_id')]
        private int $profilePhotoId,
    ) {
    }

    public function getProfilePhotoId(): int
    {
        return $this->profilePhotoId;
    }

    public function setProfilePhotoId(int $profilePhotoId): self
    {
        $this->profilePhotoId = $profilePhotoId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteProfilePhoto',
            'profile_photo_id' => $this->getProfilePhotoId(),
        ];
    }
}
