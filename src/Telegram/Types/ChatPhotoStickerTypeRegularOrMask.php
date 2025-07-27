<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Information about the sticker, which was used to create the chat photo.
 */
class ChatPhotoStickerTypeRegularOrMask extends ChatPhotoStickerType implements \JsonSerializable
{
    public function __construct(
        /** Sticker set identifier */
        #[SerializedName('sticker_set_id')]
        private int $stickerSetId,
        /** Identifier of the sticker in the set */
        #[SerializedName('sticker_id')]
        private int $stickerId,
    ) {
    }

    /**
     * Get Sticker set identifier.
     */
    public function getStickerSetId(): int
    {
        return $this->stickerSetId;
    }

    /**
     * Set Sticker set identifier.
     */
    public function setStickerSetId(int $stickerSetId): self
    {
        $this->stickerSetId = $stickerSetId;

        return $this;
    }

    /**
     * Get Identifier of the sticker in the set.
     */
    public function getStickerId(): int
    {
        return $this->stickerId;
    }

    /**
     * Set Identifier of the sticker in the set.
     */
    public function setStickerId(int $stickerId): self
    {
        $this->stickerId = $stickerId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatPhotoStickerTypeRegularOrMask',
            'sticker_set_id' => $this->getStickerSetId(),
            'sticker_id' => $this->getStickerId(),
        ];
    }
}
