<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Download or upload file speed for the user was limited, but it can be restored by subscription to Telegram Premium. The notification can be postponed until a being downloaded or uploaded file is visible to the user.
 */
class UpdateSpeedLimitNotification extends Update implements \JsonSerializable
{
    public function __construct(
        /** True, if upload speed was limited; false, if download speed was limited */
        #[SerializedName('is_upload')]
        private bool $isUpload,
    ) {
    }

    /**
     * Get True, if upload speed was limited; false, if download speed was limited.
     */
    public function getIsUpload(): bool
    {
        return $this->isUpload;
    }

    /**
     * Set True, if upload speed was limited; false, if download speed was limited.
     */
    public function setIsUpload(bool $isUpload): self
    {
        $this->isUpload = $isUpload;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateSpeedLimitNotification',
            'is_upload' => $this->getIsUpload(),
        ];
    }
}
