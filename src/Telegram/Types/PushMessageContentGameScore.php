<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new high score was achieved in a game @title Game title, empty for pinned message @score New score, 0 for pinned message @is_pinned True, if the message is a pinned message with the specified content
 */
class PushMessageContentGameScore extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('title')]
        private string $title,
        #[SerializedName('score')]
        private int $score,
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

    public function getScore(): int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

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
            '@type' => 'pushMessageContentGameScore',
            'title' => $this->getTitle(),
            'score' => $this->getScore(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
