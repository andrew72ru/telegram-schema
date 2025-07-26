<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a list of recently used stickers @is_attached Pass true to return stickers and masks that were recently attached to photos or video files; pass false to return recently sent stickers
 */
class GetRecentStickers extends Stickers implements \JsonSerializable
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
            '@type' => 'getRecentStickers',
            'is_attached' => $this->getIsAttached(),
        ];
    }
}
