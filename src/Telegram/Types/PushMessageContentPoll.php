<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a poll.
 */
class PushMessageContentPoll extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Poll question */
        #[SerializedName('question')]
        private string $question,
        /** True, if the poll is regular and not in quiz mode */
        #[SerializedName('is_regular')]
        private bool $isRegular,
        /** True, if the message is a pinned message with the specified content */
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    /**
     * Get Poll question.
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * Set Poll question.
     */
    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get True, if the poll is regular and not in quiz mode.
     */
    public function getIsRegular(): bool
    {
        return $this->isRegular;
    }

    /**
     * Set True, if the poll is regular and not in quiz mode.
     */
    public function setIsRegular(bool $isRegular): self
    {
        $this->isRegular = $isRegular;

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
            '@type' => 'pushMessageContentPoll',
            'question' => $this->getQuestion(),
            'is_regular' => $this->getIsRegular(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
