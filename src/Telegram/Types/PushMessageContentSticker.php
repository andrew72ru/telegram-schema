<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a sticker.
 */
class PushMessageContentSticker extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Message content; may be null */
        #[SerializedName('sticker')]
        private Sticker|null $sticker = null,
        /** Emoji corresponding to the sticker; may be empty */
        #[SerializedName('emoji')]
        private string $emoji,
        /** True, if the message is a pinned message with the specified content */
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    /**
     * Get Message content; may be null.
     */
    public function getSticker(): Sticker|null
    {
        return $this->sticker;
    }

    /**
     * Set Message content; may be null.
     */
    public function setSticker(Sticker|null $sticker): self
    {
        $this->sticker = $sticker;

        return $this;
    }

    /**
     * Get Emoji corresponding to the sticker; may be empty.
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * Set Emoji corresponding to the sticker; may be empty.
     */
    public function setEmoji(string $emoji): self
    {
        $this->emoji = $emoji;

        return $this;
    }

    /**
     * Get True, if the message is a pinned message with the specified content.
     */
    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    /**
     * Set True, if the message is a pinned message with the specified content.
     */
    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentSticker',
            'sticker' => $this->getSticker(),
            'emoji' => $this->getEmoji(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
