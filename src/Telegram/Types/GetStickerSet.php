<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a sticker set by its identifier @set_id Identifier of the sticker set
 */
class GetStickerSet extends StickerSet implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('set_id')]
        private int $setId,
    ) {
    }

    public function getSetId(): int
    {
        return $this->setId;
    }

    public function setSetId(int $setId): self
    {
        $this->setId = $setId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStickerSet',
            'set_id' => $this->getSetId(),
        ];
    }
}
