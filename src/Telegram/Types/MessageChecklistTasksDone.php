<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Some tasks from a checklist were marked as done or not done
 */
class MessageChecklistTasksDone extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the message with the checklist; can be 0 if the message was deleted */
        #[SerializedName('checklist_message_id')]
        private int $checklistMessageId,
        /** Identifiers of tasks that were marked as done */
        #[SerializedName('marked_as_done_task_ids')]
        private array|null $markedAsDoneTaskIds = null,
        /** Identifiers of tasks that were marked as not done */
        #[SerializedName('marked_as_not_done_task_ids')]
        private array|null $markedAsNotDoneTaskIds = null,
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
     * Get Identifiers of tasks that were marked as done
     */
    public function getMarkedAsDoneTaskIds(): array|null
    {
        return $this->markedAsDoneTaskIds;
    }

    /**
     * Set Identifiers of tasks that were marked as done
     */
    public function setMarkedAsDoneTaskIds(array|null $markedAsDoneTaskIds): self
    {
        $this->markedAsDoneTaskIds = $markedAsDoneTaskIds;

        return $this;
    }

    /**
     * Get Identifiers of tasks that were marked as not done
     */
    public function getMarkedAsNotDoneTaskIds(): array|null
    {
        return $this->markedAsNotDoneTaskIds;
    }

    /**
     * Set Identifiers of tasks that were marked as not done
     */
    public function setMarkedAsNotDoneTaskIds(array|null $markedAsNotDoneTaskIds): self
    {
        $this->markedAsNotDoneTaskIds = $markedAsNotDoneTaskIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageChecklistTasksDone',
            'checklist_message_id' => $this->getChecklistMessageId(),
            'marked_as_done_task_ids' => $this->getMarkedAsDoneTaskIds(),
            'marked_as_not_done_task_ids' => $this->getMarkedAsNotDoneTaskIds(),
        ];
    }
}
