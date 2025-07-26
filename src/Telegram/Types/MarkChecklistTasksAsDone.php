<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds tasks of a checklist in a message as done or not done
 */
class MarkChecklistTasksAsDone extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat with the message */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message containing the checklist. Use messageProperties.can_mark_tasks_as_done to check whether the tasks can be marked as done or not done */
        #[SerializedName('message_id')]
        private int $messageId,
        /** Identifiers of tasks that were marked as done */
        #[SerializedName('marked_as_done_task_ids')]
        private array|null $markedAsDoneTaskIds = null,
        /** Identifiers of tasks that were marked as not done */
        #[SerializedName('marked_as_not_done_task_ids')]
        private array|null $markedAsNotDoneTaskIds = null,
    ) {
    }

    /**
     * Get Identifier of the chat with the message
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat with the message
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message containing the checklist. Use messageProperties.can_mark_tasks_as_done to check whether the tasks can be marked as done or not done
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message containing the checklist. Use messageProperties.can_mark_tasks_as_done to check whether the tasks can be marked as done or not done
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

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
            '@type' => 'markChecklistTasksAsDone',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'marked_as_done_task_ids' => $this->getMarkedAsDoneTaskIds(),
            'marked_as_not_done_task_ids' => $this->getMarkedAsNotDoneTaskIds(),
        ];
    }
}
