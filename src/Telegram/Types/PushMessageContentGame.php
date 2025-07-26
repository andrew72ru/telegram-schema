<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a game @title Game title, empty for pinned game message @is_pinned True, if the message is a pinned message with the specified content
 */
class PushMessageContentGame extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('title')]
        private string $title,
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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
            '@type' => 'pushMessageContentGame',
            'title' => $this->getTitle(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
