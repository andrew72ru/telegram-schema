<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the sticker set of a supergroup; requires can_change_info administrator right @supergroup_id Identifier of the supergroup @sticker_set_id New value of the supergroup sticker set identifier. Use 0 to remove the supergroup sticker set.
 */
class SetSupergroupStickerSet extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        #[SerializedName('sticker_set_id')]
        private int $stickerSetId,
    ) {
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    public function getStickerSetId(): int
    {
        return $this->stickerSetId;
    }

    public function setStickerSetId(int $stickerSetId): self
    {
        $this->stickerSetId = $stickerSetId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setSupergroupStickerSet',
            'supergroup_id' => $this->getSupergroupId(),
            'sticker_set_id' => $this->getStickerSetId(),
        ];
    }
}
