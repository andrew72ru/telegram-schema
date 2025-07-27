<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes a sticker from the list of recently used stickers @is_attached Pass true to remove the sticker from the list of stickers recently attached to photo or video files; pass false to remove the sticker from the list of recently sent stickers @sticker Sticker file to delete.
 */
class RemoveRecentSticker extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('is_attached')]
        private bool $isAttached,
        #[SerializedName('sticker')]
        private InputFile|null $sticker = null,
    ) {
    }

    public function getIsAttached(): bool
    {
        return $this->isAttached;
    }

    public function setIsAttached(bool $isAttached): self
    {
        $this->isAttached = $isAttached;

        return $this;
    }

    public function getSticker(): InputFile|null
    {
        return $this->sticker;
    }

    public function setSticker(InputFile|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'removeRecentSticker',
            'is_attached' => $this->getIsAttached(),
            'sticker' => $this->getSticker(),
        ];
    }
}
