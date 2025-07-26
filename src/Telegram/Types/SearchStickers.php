<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for stickers from public sticker sets that correspond to any of the given emoji
 */
class SearchStickers extends Stickers implements \JsonSerializable
{
    public function __construct(
        /** Type of the stickers to return */
        #[SerializedName('sticker_type')]
        private StickerType|null $stickerType = null,
        /** Space-separated list of emojis to search for */
        #[SerializedName('emojis')]
        private string $emojis,
        /** Query to search for; may be empty to search for emoji only */
        #[SerializedName('query')]
        private string $query,
        /** List of possible IETF language tags of the user's input language; may be empty if unknown */
        #[SerializedName('input_language_codes')]
        private array|null $inputLanguageCodes = null,
        /** The offset from which to return the stickers; must be non-negative */
        #[SerializedName('offset')]
        private int $offset,
        /** The maximum number of stickers to be returned; 0-100 */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Type of the stickers to return
     */
    public function getStickerType(): StickerType|null
    {
        return $this->stickerType;
    }

    /**
     * Set Type of the stickers to return
     */
    public function setStickerType(StickerType|null $stickerType): self
    {
        $this->stickerType = $stickerType;

        return $this;
    }

    /**
     * Get Space-separated list of emojis to search for
     */
    public function getEmojis(): string
    {
        return $this->emojis;
    }

    /**
     * Set Space-separated list of emojis to search for
     */
    public function setEmojis(string $emojis): self
    {
        $this->emojis = $emojis;

        return $this;
    }

    /**
     * Get Query to search for; may be empty to search for emoji only
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set Query to search for; may be empty to search for emoji only
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get List of possible IETF language tags of the user's input language; may be empty if unknown
     */
    public function getInputLanguageCodes(): array|null
    {
        return $this->inputLanguageCodes;
    }

    /**
     * Set List of possible IETF language tags of the user's input language; may be empty if unknown
     */
    public function setInputLanguageCodes(array|null $inputLanguageCodes): self
    {
        $this->inputLanguageCodes = $inputLanguageCodes;

        return $this;
    }

    /**
     * Get The offset from which to return the stickers; must be non-negative
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Set The offset from which to return the stickers; must be non-negative
     */
    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of stickers to be returned; 0-100
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of stickers to be returned; 0-100
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchStickers',
            'sticker_type' => $this->getStickerType(),
            'emojis' => $this->getEmojis(),
            'query' => $this->getQuery(),
            'input_language_codes' => $this->getInputLanguageCodes(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
