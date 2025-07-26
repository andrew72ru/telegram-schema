<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Uploads a file with a sticker; returns the uploaded file
 */
class UploadStickerFile extends File implements \JsonSerializable
{
    public function __construct(
        /** Sticker file owner; ignored for regular users */
        #[SerializedName('user_id')]
        private int $userId,
        /** Sticker format */
        #[SerializedName('sticker_format')]
        private StickerFormat|null $stickerFormat = null,
        /** File file to upload; must fit in a 512x512 square. For WEBP stickers the file must be in WEBP or PNG format, which will be converted to WEBP server-side. */
        #[SerializedName('sticker')]
        private InputFile|null $sticker = null,
    ) {
    }

    /**
     * Get Sticker file owner; ignored for regular users
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Sticker file owner; ignored for regular users
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Sticker format
     */
    public function getStickerFormat(): StickerFormat|null
    {
        return $this->stickerFormat;
    }

    /**
     * Set Sticker format
     */
    public function setStickerFormat(StickerFormat|null $stickerFormat): self
    {
        $this->stickerFormat = $stickerFormat;

        return $this;
    }

    /**
     * Get File file to upload; must fit in a 512x512 square. For WEBP stickers the file must be in WEBP or PNG format, which will be converted to WEBP server-side.
     */
    public function getSticker(): InputFile|null
    {
        return $this->sticker;
    }

    /**
     * Set File file to upload; must fit in a 512x512 square. For WEBP stickers the file must be in WEBP or PNG format, which will be converted to WEBP server-side.
     */
    public function setSticker(InputFile|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'uploadStickerFile',
            'user_id' => $this->getUserId(),
            'sticker_format' => $this->getStickerFormat(),
            'sticker' => $this->getSticker(),
        ];
    }
}
