<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a checklist
 */
class PushMessageContentChecklist extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Checklist title */
        #[SerializedName('title')]
        private string $title,
        /** True, if the message is a pinned message with the specified content */
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    /**
     * Get Checklist title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Checklist title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get True, if the message is a pinned message with the specified content
     */
    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    /**
     * Set True, if the message is a pinned message with the specified content
     */
    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentChecklist',
            'title' => $this->getTitle(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
