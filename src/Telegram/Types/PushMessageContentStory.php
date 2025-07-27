<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a story @is_mention True, if the user was mentioned in the story @is_pinned True, if the message is a pinned message with the specified content.
 */
class PushMessageContentStory extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('is_mention')]
        private bool $isMention,
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    public function getIsMention(): bool
    {
        return $this->isMention;
    }

    public function setIsMention(bool $isMention): self
    {
        $this->isMention = $isMention;

        return $this;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentStory',
            'is_mention' => $this->getIsMention(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
