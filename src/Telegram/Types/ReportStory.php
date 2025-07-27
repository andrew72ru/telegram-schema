<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Reports a story to the Telegram moderators.
 */
class ReportStory extends ReportStoryResult implements \JsonSerializable
{
    public function __construct(
        /** The identifier of the poster of the story to report */
        #[SerializedName('story_poster_chat_id')]
        private int $storyPosterChatId,
        /** The identifier of the story to report */
        #[SerializedName('story_id')]
        private int $storyId,
        /** Option identifier chosen by the user; leave empty for the initial request */
        #[SerializedName('option_id')]
        private string $optionId,
        /** Additional report details; 0-1024 characters; leave empty for the initial request */
        #[SerializedName('text')]
        private string $text,
    ) {
    }

    /**
     * Get The identifier of the poster of the story to report.
     */
    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    /**
     * Set The identifier of the poster of the story to report.
     */
    public function setStoryPosterChatId(int $storyPosterChatId): self
    {
        $this->storyPosterChatId = $storyPosterChatId;

        return $this;
    }

    /**
     * Get The identifier of the story to report.
     */
    public function getStoryId(): int
    {
        return $this->storyId;
    }

    /**
     * Set The identifier of the story to report.
     */
    public function setStoryId(int $storyId): self
    {
        $this->storyId = $storyId;

        return $this;
    }

    /**
     * Get Option identifier chosen by the user; leave empty for the initial request.
     */
    public function getOptionId(): string
    {
        return $this->optionId;
    }

    /**
     * Set Option identifier chosen by the user; leave empty for the initial request.
     */
    public function setOptionId(string $optionId): self
    {
        $this->optionId = $optionId;

        return $this;
    }

    /**
     * Get Additional report details; 0-1024 characters; leave empty for the initial request.
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Set Additional report details; 0-1024 characters; leave empty for the initial request.
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportStory',
            'story_poster_chat_id' => $this->getStoryPosterChatId(),
            'story_id' => $this->getStoryId(),
            'option_id' => $this->getOptionId(),
            'text' => $this->getText(),
        ];
    }
}
