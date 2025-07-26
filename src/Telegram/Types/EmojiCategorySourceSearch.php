<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The category contains a list of similar emoji to search for in getStickers and searchStickers for stickers,
 */
class EmojiCategorySourceSearch extends EmojiCategorySource implements \JsonSerializable
{
    public function __construct(
        /** List of emojis to search for */
        #[SerializedName('emojis')]
        private array|null $emojis = null,
    ) {
    }

    /**
     * Get List of emojis to search for
     */
    public function getEmojis(): array|null
    {
        return $this->emojis;
    }

    /**
     * Set List of emojis to search for
     */
    public function setEmojis(array|null $emojis): self
    {
        $this->emojis = $emojis;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiCategorySourceSearch',
            'emojis' => $this->getEmojis(),
        ];
    }
}
