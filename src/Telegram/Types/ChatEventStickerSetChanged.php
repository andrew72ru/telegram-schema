<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The supergroup sticker set was changed @old_sticker_set_id Previous identifier of the chat sticker set; 0 if none @new_sticker_set_id New identifier of the chat sticker set; 0 if none.
 */
class ChatEventStickerSetChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_sticker_set_id')]
        private int $oldStickerSetId,
        #[SerializedName('new_sticker_set_id')]
        private int $newStickerSetId,
    ) {
    }

    public function getOldStickerSetId(): int
    {
        return $this->oldStickerSetId;
    }

    public function setOldStickerSetId(int $oldStickerSetId): self
    {
        $this->oldStickerSetId = $oldStickerSetId;

        return $this;
    }

    public function getNewStickerSetId(): int
    {
        return $this->newStickerSetId;
    }

    public function setNewStickerSetId(int $newStickerSetId): self
    {
        $this->newStickerSetId = $newStickerSetId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventStickerSetChanged',
            'old_sticker_set_id' => $this->getOldStickerSetId(),
            'new_sticker_set_id' => $this->getNewStickerSetId(),
        ];
    }
}
