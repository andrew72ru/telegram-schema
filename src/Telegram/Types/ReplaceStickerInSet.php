<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Replaces existing sticker in a set. The function is equivalent to removeStickerFromSet, then addStickerToSet, then setStickerPositionInSet.
 */
class ReplaceStickerInSet extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Sticker set owner; ignored for regular users */
        #[SerializedName('user_id')]
        private int $userId,
        /** Sticker set name. The sticker set must be owned by the current user */
        #[SerializedName('name')]
        private string $name,
        /** Sticker to remove from the set */
        #[SerializedName('old_sticker')]
        private InputFile|null $oldSticker = null,
        /** Sticker to add to the set */
        #[SerializedName('new_sticker')]
        private InputSticker|null $newSticker = null,
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
     * Get Sticker to remove from the set.
     */
    public function getOldSticker(): InputFile|null
    {
        return $this->oldSticker;
    }

    /**
     * Set Sticker to remove from the set.
     */
    public function setOldSticker(InputFile|null $oldSticker): self
    {
        $this->oldSticker = $oldSticker;

        return $this;
    }

    /**
     * Get Sticker to add to the set.
     */
    public function getNewSticker(): InputSticker|null
    {
        return $this->newSticker;
    }

    /**
     * Set Sticker to add to the set.
     */
    public function setNewSticker(InputSticker|null $newSticker): self
    {
        $this->newSticker = $newSticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'replaceStickerInSet',
            'user_id' => $this->getUserId(),
            'name' => $this->getName(),
            'old_sticker' => $this->getOldSticker(),
            'new_sticker' => $this->getNewSticker(),
        ];
    }
}
