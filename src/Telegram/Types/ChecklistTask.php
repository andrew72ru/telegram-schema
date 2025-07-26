<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a task in a checklist
 */
class ChecklistTask implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the task */
        #[SerializedName('id')]
        private int $id,
        /** Text of the task; may contain only Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, Url, EmailAddress, Mention, Hashtag, Cashtag and PhoneNumber entities */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** Identifier of the user that completed the task; 0 if the task isn't completed */
        #[SerializedName('completed_by_user_id')]
        private int $completedByUserId,
        /** Point in time (Unix timestamp) when the task was completed; 0 if the task isn't completed */
        #[SerializedName('completion_date')]
        private int $completionDate,
    ) {
    }

    /**
     * Get Unique identifier of the task
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the task
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Text of the task; may contain only Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, Url, EmailAddress, Mention, Hashtag, Cashtag and PhoneNumber entities
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Text of the task; may contain only Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, Url, EmailAddress, Mention, Hashtag, Cashtag and PhoneNumber entities
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Identifier of the user that completed the task; 0 if the task isn't completed
     */
    public function getCompletedByUserId(): int
    {
        return $this->completedByUserId;
    }

    /**
     * Set Identifier of the user that completed the task; 0 if the task isn't completed
     */
    public function setCompletedByUserId(int $completedByUserId): self
    {
        $this->completedByUserId = $completedByUserId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the task was completed; 0 if the task isn't completed
     */
    public function getCompletionDate(): int
    {
        return $this->completionDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the task was completed; 0 if the task isn't completed
     */
    public function setCompletionDate(int $completionDate): self
    {
        $this->completionDate = $completionDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checklistTask',
            'id' => $this->getId(),
            'text' => $this->getText(),
            'completed_by_user_id' => $this->getCompletedByUserId(),
            'completion_date' => $this->getCompletionDate(),
        ];
    }
}
