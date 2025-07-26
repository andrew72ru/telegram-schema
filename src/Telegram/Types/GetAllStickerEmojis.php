<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns unique emoji that correspond to stickers to be found by the getStickers(sticker_type, query, 1000000, chat_id)
 */
class GetAllStickerEmojis extends Emojis implements \JsonSerializable
{
    public function __construct(
        /** Type of the stickers to search for */
        #[SerializedName('sticker_type')]
        private StickerType|null $stickerType = null,
        /** Search query */
        #[SerializedName('query')]
        private string $query,
        /** Chat identifier for which to find stickers */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Pass true if only main emoji for each found sticker must be included in the result */
        #[SerializedName('return_only_main_emoji')]
        private bool $returnOnlyMainEmoji,
    ) {
    }

    /**
     * Get Type of the stickers to search for
     */
    public function getStickerType(): StickerType|null
    {
        return $this->stickerType;
    }

    /**
     * Set Type of the stickers to search for
     */
    public function setStickerType(StickerType|null $stickerType): self
    {
        $this->stickerType = $stickerType;

        return $this;
    }

    /**
     * Get Search query
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set Search query
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get Chat identifier for which to find stickers
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier for which to find stickers
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Pass true if only main emoji for each found sticker must be included in the result
     */
    public function getReturnOnlyMainEmoji(): bool
    {
        return $this->returnOnlyMainEmoji;
    }

    /**
     * Set Pass true if only main emoji for each found sticker must be included in the result
     */
    public function setReturnOnlyMainEmoji(bool $returnOnlyMainEmoji): self
    {
        $this->returnOnlyMainEmoji = $returnOnlyMainEmoji;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getAllStickerEmojis',
            'sticker_type' => $this->getStickerType(),
            'query' => $this->getQuery(),
            'chat_id' => $this->getChatId(),
            'return_only_main_emoji' => $this->getReturnOnlyMainEmoji(),
        ];
    }
}
