<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a task in a checklist to be sent
 */
class InputChecklistTask implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the task; must be positive */
        #[SerializedName('id')]
        private int $id,
        /** Text of the task; 1-getOption("checklist_task_text_length_max") characters without line feeds. May contain only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
    ) {
    }

    /**
     * Get Unique identifier of the task; must be positive
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the task; must be positive
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Text of the task; 1-getOption("checklist_task_text_length_max") characters without line feeds. May contain only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Text of the task; 1-getOption("checklist_task_text_length_max") characters without line feeds. May contain only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputChecklistTask',
            'id' => $this->getId(),
            'text' => $this->getText(),
        ];
    }
}
