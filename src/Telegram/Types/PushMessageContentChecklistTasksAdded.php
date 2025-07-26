<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Some tasks were added to a checklist @task_count Number of added tasks
 */
class PushMessageContentChecklistTasksAdded extends PushMessageContent implements \JsonSerializable
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
            '@type' => 'pushMessageContentChecklistTasksAdded',
            'task_count' => $this->getTaskCount(),
        ];
    }
}
