<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Clears the list of recently used stickers @is_attached Pass true to clear the list of stickers recently attached to photo or video files; pass false to clear the list of recently sent stickers.
 */
class ClearRecentStickers extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('is_attached')]
        private bool $isAttached,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'clearRecentStickers',
            'is_attached' => $this->getIsAttached(),
        ];
    }
}
