<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes name of a chat folder
 */
class ChatFolderName implements \JsonSerializable
{
    public function __construct(
        /** The text of the chat folder name; 1-12 characters without line feeds. May contain only CustomEmoji entities */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** True, if custom emoji in the name must be animated */
        #[SerializedName('animate_custom_emoji')]
        private bool $animateCustomEmoji,
    ) {
    }

    /**
     * Get The text of the chat folder name; 1-12 characters without line feeds. May contain only CustomEmoji entities
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set The text of the chat folder name; 1-12 characters without line feeds. May contain only CustomEmoji entities
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get True, if custom emoji in the name must be animated
     */
    public function getAnimateCustomEmoji(): bool
    {
        return $this->animateCustomEmoji;
    }

    /**
     * Set True, if custom emoji in the name must be animated
     */
    public function setAnimateCustomEmoji(bool $animateCustomEmoji): self
    {
        $this->animateCustomEmoji = $animateCustomEmoji;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatFolderName',
            'text' => $this->getText(),
            'animate_custom_emoji' => $this->getAnimateCustomEmoji(),
        ];
    }
}
