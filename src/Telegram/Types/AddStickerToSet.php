<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a new sticker to a set.
 */
class AddStickerToSet extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Sticker set owner; ignored for regular users */
        #[SerializedName('user_id')]
        private int $userId,
        /** Sticker set name. The sticker set must be owned by the current user, and contain less than 200 stickers for custom emoji sticker sets and less than 120 otherwise */
        #[SerializedName('name')]
        private string $name,
        /** Sticker to add to the set */
        #[SerializedName('sticker')]
        private InputSticker|null $sticker = null,
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
     * Get Sticker set name. The sticker set must be owned by the current user, and contain less than 200 stickers for custom emoji sticker sets and less than 120 otherwise.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Sticker set name. The sticker set must be owned by the current user, and contain less than 200 stickers for custom emoji sticker sets and less than 120 otherwise.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Sticker to add to the set.
     */
    public function getSticker(): InputSticker|null
    {
        return $this->sticker;
    }

    /**
     * Set Sticker to add to the set.
     */
    public function setSticker(InputSticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addStickerToSet',
            'user_id' => $this->getUserId(),
            'name' => $this->getName(),
            'sticker' => $this->getSticker(),
        ];
    }
}
