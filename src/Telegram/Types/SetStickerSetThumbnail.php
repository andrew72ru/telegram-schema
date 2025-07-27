<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets a sticker set thumbnail.
 */
class SetStickerSetThumbnail extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Sticker set owner; ignored for regular users */
        #[SerializedName('user_id')]
        private int $userId,
        /** Sticker set name. The sticker set must be owned by the current user */
        #[SerializedName('name')]
        private string $name,
        /** Thumbnail to set; pass null to remove the sticker set thumbnail */
        #[SerializedName('thumbnail')]
        private InputFile|null $thumbnail = null,
        /** Format of the thumbnail; pass null if thumbnail is removed */
        #[SerializedName('format')]
        private StickerFormat|null $format = null,
    ) {
    }

    /**
     * Get Sticker set owner; ignored for regular users.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Sticker set owner; ignored for regular users.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Sticker set name. The sticker set must be owned by the current user.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Sticker set name. The sticker set must be owned by the current user.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Thumbnail to set; pass null to remove the sticker set thumbnail.
     */
    public function getThumbnail(): InputFile|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Thumbnail to set; pass null to remove the sticker set thumbnail.
     */
    public function setThumbnail(InputFile|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get Format of the thumbnail; pass null if thumbnail is removed.
     */
    public function getFormat(): StickerFormat|null
    {
        return $this->format;
    }

    /**
     * Set Format of the thumbnail; pass null if thumbnail is removed.
     */
    public function setFormat(StickerFormat|null $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setStickerSetThumbnail',
            'user_id' => $this->getUserId(),
            'name' => $this->getName(),
            'thumbnail' => $this->getThumbnail(),
            'format' => $this->getFormat(),
        ];
    }
}
