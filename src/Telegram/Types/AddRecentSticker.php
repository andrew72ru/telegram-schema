<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Manually adds a new sticker to the list of recently used stickers. The new sticker is added to the top of the list. If the sticker was already in the list, it is removed from the list first.
 */
class AddRecentSticker extends Stickers implements \JsonSerializable
{
    public function __construct(
        /** Pass true to add the sticker to the list of stickers recently attached to photo or video files; pass false to add the sticker to the list of recently sent stickers */
        #[SerializedName('is_attached')]
        private bool $isAttached,
        /** Sticker file to add */
        #[SerializedName('sticker')]
        private InputFile|null $sticker = null,
    ) {
    }

    /**
     * Get Pass true to add the sticker to the list of stickers recently attached to photo or video files; pass false to add the sticker to the list of recently sent stickers.
     */
    public function getIsAttached(): bool
    {
        return $this->isAttached;
    }

    /**
     * Set Pass true to add the sticker to the list of stickers recently attached to photo or video files; pass false to add the sticker to the list of recently sent stickers.
     */
    public function setIsAttached(bool $isAttached): self
    {
        $this->isAttached = $isAttached;

        return $this;
    }

    /**
     * Get Sticker file to add.
     */
    public function getSticker(): InputFile|null
    {
        return $this->sticker;
    }

    /**
     * Set Sticker file to add.
     */
    public function setSticker(InputFile|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addRecentSticker',
            'is_attached' => $this->getIsAttached(),
            'sticker' => $this->getSticker(),
        ];
    }
}
