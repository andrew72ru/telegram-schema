<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with paid media.
 */
class PushMessageContentPaidMedia extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Number of Telegram Stars needed to buy access to the media in the message; 0 for pinned message */
        #[SerializedName('star_count')]
        private int $starCount,
        /** True, if the message is a pinned message with the specified content */
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    /**
     * Get Number of Telegram Stars needed to buy access to the media in the message; 0 for pinned message.
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set Number of Telegram Stars needed to buy access to the media in the message; 0 for pinned message.
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

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
            '@type' => 'pushMessageContentPaidMedia',
            'star_count' => $this->getStarCount(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
