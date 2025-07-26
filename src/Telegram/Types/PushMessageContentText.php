<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A text message @text Message text @is_pinned True, if the message is a pinned message with the specified content
 */
class PushMessageContentText extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private string $text,
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

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
            '@type' => 'pushMessageContentText',
            'text' => $this->getText(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
