<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Some tasks were added to a checklist
 */
class MessageChecklistTasksAdded extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the message with the checklist; can be 0 if the message was deleted */
        #[SerializedName('checklist_message_id')]
        private int $checklistMessageId,
        /** List of tasks added to the checklist */
        #[SerializedName('tasks')]
        private array|null $tasks = null,
    ) {
    }

    /**
     * Get Identifier of the message with the checklist; can be 0 if the message was deleted
     */
    public function getChecklistMessageId(): int
    {
        return $this->checklistMessageId;
    }

    /**
     * Set Identifier of the message with the checklist; can be 0 if the message was deleted
     */
    public function setChecklistMessageId(int $checklistMessageId): self
    {
        $this->checklistMessageId = $checklistMessageId;

        return $this;
    }

    /**
     * Get List of tasks added to the checklist
     */
    public function getTasks(): array|null
    {
        return $this->tasks;
    }

    /**
     * Set List of tasks added to the checklist
     */
    public function setTasks(array|null $tasks): self
    {
        $this->tasks = $tasks;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageChecklistTasksAdded',
            'checklist_message_id' => $this->getChecklistMessageId(),
            'tasks' => $this->getTasks(),
        ];
    }
}
