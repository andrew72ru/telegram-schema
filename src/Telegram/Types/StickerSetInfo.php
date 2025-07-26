<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents short information about a sticker set
 */
class StickerSetInfo implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the sticker set */
        #[SerializedName('id')]
        private int $id,
        /** Title of the sticker set */
        #[SerializedName('title')]
        private string $title,
        /** Name of the sticker set */
        #[SerializedName('name')]
        private string $name,
        /** Sticker set thumbnail in WEBP, TGS, or WEBM format with width and height 100; may be null. The file can be downloaded only before the thumbnail is changed */
        #[SerializedName('thumbnail')]
        private Thumbnail|null $thumbnail = null,
        /** Sticker set thumbnail's outline; may be null if unknown */
        #[SerializedName('thumbnail_outline')]
        private Outline|null $thumbnailOutline = null,
        /** True, if the sticker set is owned by the current user */
        #[SerializedName('is_owned')]
        private bool $isOwned,
        /** True, if the sticker set has been installed by the current user */
        #[SerializedName('is_installed')]
        private bool $isInstalled,
        /** True, if the sticker set has been archived. A sticker set can't be installed and archived simultaneously */
        #[SerializedName('is_archived')]
        private bool $isArchived,
        /** True, if the sticker set is official */
        #[SerializedName('is_official')]
        private bool $isOfficial,
        /** Type of the stickers in the set */
        #[SerializedName('sticker_type')]
        private StickerType|null $stickerType = null,
        /** True, if stickers in the sticker set are custom emoji that must be repainted; for custom emoji sticker sets only */
        #[SerializedName('needs_repainting')]
        private bool $needsRepainting,
        /** True, if stickers in the sticker set are custom emoji that can be used as chat emoji status; for custom emoji sticker sets only */
        #[SerializedName('is_allowed_as_chat_emoji_status')]
        private bool $isAllowedAsChatEmojiStatus,
        /** True for already viewed trending sticker sets */
        #[SerializedName('is_viewed')]
        private bool $isViewed,
        /** Total number of stickers in the set */
        #[SerializedName('size')]
        private int $size,
        /** Up to the first 5 stickers from the set, depending on the context. If the application needs more stickers the full sticker set needs to be requested */
        #[SerializedName('covers')]
        private array|null $covers = null,
    ) {
    }

    /**
     * Get Identifier of the sticker set
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Identifier of the sticker set
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Title of the sticker set
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the sticker set
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Name of the sticker set
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Name of the sticker set
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Sticker set thumbnail in WEBP, TGS, or WEBM format with width and height 100; may be null. The file can be downloaded only before the thumbnail is changed
     */
    public function getThumbnail(): Thumbnail|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Sticker set thumbnail in WEBP, TGS, or WEBM format with width and height 100; may be null. The file can be downloaded only before the thumbnail is changed
     */
    public function setThumbnail(Thumbnail|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get Sticker set thumbnail's outline; may be null if unknown
     */
    public function getThumbnailOutline(): Outline|null
    {
        return $this->thumbnailOutline;
    }

    /**
     * Set Sticker set thumbnail's outline; may be null if unknown
     */
    public function setThumbnailOutline(Outline|null $thumbnailOutline): self
    {
        $this->thumbnailOutline = $thumbnailOutline;

        return $this;
    }

    /**
     * Get True, if the sticker set is owned by the current user
     */
    public function getIsOwned(): bool
    {
        return $this->isOwned;
    }

    /**
     * Set True, if the sticker set is owned by the current user
     */
    public function setIsOwned(bool $isOwned): self
    {
        $this->isOwned = $isOwned;

        return $this;
    }

    /**
     * Get True, if the sticker set has been installed by the current user
     */
    public function getIsInstalled(): bool
    {
        return $this->isInstalled;
    }

    /**
     * Set True, if the sticker set has been installed by the current user
     */
    public function setIsInstalled(bool $isInstalled): self
    {
        $this->isInstalled = $isInstalled;

        return $this;
    }

    /**
     * Get True, if the sticker set has been archived. A sticker set can't be installed and archived simultaneously
     */
    public function getIsArchived(): bool
    {
        return $this->isArchived;
    }

    /**
     * Set True, if the sticker set has been archived. A sticker set can't be installed and archived simultaneously
     */
    public function setIsArchived(bool $isArchived): self
    {
        $this->isArchived = $isArchived;

        return $this;
    }

    /**
     * Get True, if the sticker set is official
     */
    public function getIsOfficial(): bool
    {
        return $this->isOfficial;
    }

    /**
     * Set True, if the sticker set is official
     */
    public function setIsOfficial(bool $isOfficial): self
    {
        $this->isOfficial = $isOfficial;

        return $this;
    }

    /**
     * Get Type of the stickers in the set
     */
    public function getStickerType(): StickerType|null
    {
        return $this->stickerType;
    }

    /**
     * Set Type of the stickers in the set
     */
    public function setStickerType(StickerType|null $stickerType): self
    {
        $this->stickerType = $stickerType;

        return $this;
    }

    /**
     * Get True, if stickers in the sticker set are custom emoji that must be repainted; for custom emoji sticker sets only
     */
    public function getNeedsRepainting(): bool
    {
        return $this->needsRepainting;
    }

    /**
     * Set True, if stickers in the sticker set are custom emoji that must be repainted; for custom emoji sticker sets only
     */
    public function setNeedsRepainting(bool $needsRepainting): self
    {
        $this->needsRepainting = $needsRepainting;

        return $this;
    }

    /**
     * Get True, if stickers in the sticker set are custom emoji that can be used as chat emoji status; for custom emoji sticker sets only
     */
    public function getIsAllowedAsChatEmojiStatus(): bool
    {
        return $this->isAllowedAsChatEmojiStatus;
    }

    /**
     * Set True, if stickers in the sticker set are custom emoji that can be used as chat emoji status; for custom emoji sticker sets only
     */
    public function setIsAllowedAsChatEmojiStatus(bool $isAllowedAsChatEmojiStatus): self
    {
        $this->isAllowedAsChatEmojiStatus = $isAllowedAsChatEmojiStatus;

        return $this;
    }

    /**
     * Get True for already viewed trending sticker sets
     */
    public function getIsViewed(): bool
    {
        return $this->isViewed;
    }

    /**
     * Set True for already viewed trending sticker sets
     */
    public function setIsViewed(bool $isViewed): self
    {
        $this->isViewed = $isViewed;

        return $this;
    }

    /**
     * Get Total number of stickers in the set
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * Set Total number of stickers in the set
     */
    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get Up to the first 5 stickers from the set, depending on the context. If the application needs more stickers the full sticker set needs to be requested
     */
    public function getCovers(): array|null
    {
        return $this->covers;
    }

    /**
     * Set Up to the first 5 stickers from the set, depending on the context. If the application needs more stickers the full sticker set needs to be requested
     */
    public function setCovers(array|null $covers): self
    {
        $this->covers = $covers;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'stickerSetInfo',
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'name' => $this->getName(),
            'thumbnail' => $this->getThumbnail(),
            'thumbnail_outline' => $this->getThumbnailOutline(),
            'is_owned' => $this->getIsOwned(),
            'is_installed' => $this->getIsInstalled(),
            'is_archived' => $this->getIsArchived(),
            'is_official' => $this->getIsOfficial(),
            'sticker_type' => $this->getStickerType(),
            'needs_repainting' => $this->getNeedsRepainting(),
            'is_allowed_as_chat_emoji_status' => $this->getIsAllowedAsChatEmojiStatus(),
            'is_viewed' => $this->getIsViewed(),
            'size' => $this->getSize(),
            'covers' => $this->getCovers(),
        ];
    }
}
