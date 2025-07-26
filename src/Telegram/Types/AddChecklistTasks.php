<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds tasks to a checklist in a message
 */
class AddChecklistTasks extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat with the message */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message containing the checklist. Use messageProperties.can_add_tasks to check whether the tasks can be added */
        #[SerializedName('message_id')]
        private int $messageId,
        /** List of added tasks */
        #[SerializedName('tasks')]
        private array|null $tasks = null,
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
     * Get Identifier of the message containing the checklist. Use messageProperties.can_add_tasks to check whether the tasks can be added
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message containing the checklist. Use messageProperties.can_add_tasks to check whether the tasks can be added
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get List of added tasks
     */
    public function getTasks(): array|null
    {
        return $this->tasks;
    }

    /**
     * Set List of added tasks
     */
    public function setTasks(array|null $tasks): self
    {
        $this->tasks = $tasks;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addChecklistTasks',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'tasks' => $this->getTasks(),
        ];
    }
}
