<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns stickers from the installed sticker sets that correspond to any of the given emoji or can be found by sticker-specific keywords. If the query is non-empty, then favorite, recently used or trending stickers may also be returned.
 */
class GetStickers extends Stickers implements \JsonSerializable
{
    public function __construct(
        /** Type of the stickers to return */
        #[SerializedName('sticker_type')]
        private StickerType|null $stickerType = null,
        /** Search query; a space-separated list of emojis or a keyword prefix. If empty, returns all known installed stickers */
        #[SerializedName('query')]
        private string $query,
        /** The maximum number of stickers to be returned */
        #[SerializedName('limit')]
        private int $limit,
        /** Chat identifier for which to return stickers. Available custom emoji stickers may be different for different chats */
        #[SerializedName('chat_id')]
        private int $chatId,
    ) {
    }

    /**
     * Get Type of the stickers to return.
     */
    public function getStickerType(): StickerType|null
    {
        return $this->stickerType;
    }

    /**
     * Set Type of the stickers to return.
     */
    public function setStickerType(StickerType|null $stickerType): self
    {
        $this->stickerType = $stickerType;

        return $this;
    }

    /**
     * Get Search query; a space-separated list of emojis or a keyword prefix. If empty, returns all known installed stickers.
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set Search query; a space-separated list of emojis or a keyword prefix. If empty, returns all known installed stickers.
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get The maximum number of stickers to be returned.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of stickers to be returned.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Get Chat identifier for which to return stickers. Available custom emoji stickers may be different for different chats.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier for which to return stickers. Available custom emoji stickers may be different for different chats.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStickers',
            'sticker_type' => $this->getStickerType(),
            'query' => $this->getQuery(),
            'limit' => $this->getLimit(),
            'chat_id' => $this->getChatId(),
        ];
    }
}
