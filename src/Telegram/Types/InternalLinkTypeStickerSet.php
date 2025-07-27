<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a sticker set. Call searchStickerSet with the given sticker set name to process the link and show the sticker set.
 */
class InternalLinkTypeStickerSet extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Name of the sticker set */
        #[SerializedName('sticker_set_name')]
        private string $stickerSetName,
        /** True, if the sticker set is expected to contain custom emoji */
        #[SerializedName('expect_custom_emoji')]
        private bool $expectCustomEmoji,
    ) {
    }

    /**
     * Get Name of the sticker set.
     */
    public function getStickerSetName(): string
    {
        return $this->stickerSetName;
    }

    /**
     * Set Name of the sticker set.
     */
    public function setStickerSetName(string $stickerSetName): self
    {
        $this->stickerSetName = $stickerSetName;

        return $this;
    }

    /**
     * Get True, if the sticker set is expected to contain custom emoji.
     */
    public function getExpectCustomEmoji(): bool
    {
        return $this->expectCustomEmoji;
    }

    /**
     * Set True, if the sticker set is expected to contain custom emoji.
     */
    public function setExpectCustomEmoji(bool $expectCustomEmoji): self
    {
        $this->expectCustomEmoji = $expectCustomEmoji;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeStickerSet',
            'sticker_set_name' => $this->getStickerSetName(),
            'expect_custom_emoji' => $this->getExpectCustomEmoji(),
        ];
    }
}
