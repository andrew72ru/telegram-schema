<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Creates a new sticker set. Returns the newly created sticker set.
 */
class CreateNewStickerSet extends StickerSet implements \JsonSerializable
{
    public function __construct(
        /** Sticker set owner; ignored for regular users */
        #[SerializedName('user_id')]
        private int $userId,
        /** Sticker set title; 1-64 characters */
        #[SerializedName('title')]
        private string $title,
        /** Sticker set name. Can contain only English letters, digits and underscores. Must end with *"_by_<bot username>"* (*<bot_username>* is case insensitive) for bots; 0-64 characters. */
        #[SerializedName('name')]
        private string $name,
        /** Type of the stickers in the set */
        #[SerializedName('sticker_type')]
        private StickerType|null $stickerType = null,
        /** Pass true if stickers in the sticker set must be repainted; for custom emoji sticker sets only */
        #[SerializedName('needs_repainting')]
        private bool $needsRepainting,
        /** List of stickers to be added to the set; 1-200 stickers for custom emoji sticker sets, and 1-120 stickers otherwise. For TGS stickers, uploadStickerFile must be used before the sticker is shown */
        #[SerializedName('stickers')]
        private array|null $stickers = null,
        /** Source of the sticker set; may be empty if unknown */
        #[SerializedName('source')]
        private string $source,
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
     * Get Sticker set title; 1-64 characters.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Sticker set title; 1-64 characters.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Sticker set name. Can contain only English letters, digits and underscores. Must end with *"_by_<bot username>"* (*<bot_username>* is case insensitive) for bots; 0-64 characters..
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Sticker set name. Can contain only English letters, digits and underscores. Must end with *"_by_<bot username>"* (*<bot_username>* is case insensitive) for bots; 0-64 characters..
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Type of the stickers in the set.
     */
    public function getStickerType(): StickerType|null
    {
        return $this->stickerType;
    }

    /**
     * Set Type of the stickers in the set.
     */
    public function setStickerType(StickerType|null $stickerType): self
    {
        $this->stickerType = $stickerType;

        return $this;
    }

    /**
     * Get Pass true if stickers in the sticker set must be repainted; for custom emoji sticker sets only.
     */
    public function getNeedsRepainting(): bool
    {
        return $this->needsRepainting;
    }

    /**
     * Set Pass true if stickers in the sticker set must be repainted; for custom emoji sticker sets only.
     */
    public function setNeedsRepainting(bool $needsRepainting): self
    {
        $this->needsRepainting = $needsRepainting;

        return $this;
    }

    /**
     * Get List of stickers to be added to the set; 1-200 stickers for custom emoji sticker sets, and 1-120 stickers otherwise. For TGS stickers, uploadStickerFile must be used before the sticker is shown.
     */
    public function getStickers(): array|null
    {
        return $this->stickers;
    }

    /**
     * Set List of stickers to be added to the set; 1-200 stickers for custom emoji sticker sets, and 1-120 stickers otherwise. For TGS stickers, uploadStickerFile must be used before the sticker is shown.
     */
    public function setStickers(array|null $stickers): self
    {
        $this->stickers = $stickers;

        return $this;
    }

    /**
     * Get Source of the sticker set; may be empty if unknown.
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * Set Source of the sticker set; may be empty if unknown.
     */
    public function setSource(string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createNewStickerSet',
            'user_id' => $this->getUserId(),
            'title' => $this->getTitle(),
            'name' => $this->getName(),
            'sticker_type' => $this->getStickerType(),
            'needs_repainting' => $this->getNeedsRepainting(),
            'stickers' => $this->getStickers(),
            'source' => $this->getSource(),
        ];
    }
}
