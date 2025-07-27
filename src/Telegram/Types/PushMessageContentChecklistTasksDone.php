<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Some tasks from a checklist were marked as done or not done @task_count Number of changed tasks.
 */
class PushMessageContentChecklistTasksDone extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('task_count')]
        private int $taskCount,
    ) {
    }

    public function getTaskCount(): int
    {
        return $this->taskCount;
    }

    public function setTaskCount(int $taskCount): self
    {
        $this->taskCount = $taskCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentChecklistTasksDone',
            'task_count' => $this->getTaskCount(),
        ];
    }
}
