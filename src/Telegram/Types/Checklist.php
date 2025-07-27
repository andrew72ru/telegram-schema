<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a checklist.
 */
class Checklist implements \JsonSerializable
{
    public function __construct(
        /** Title of the checklist; may contain only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities */
        #[SerializedName('title')]
        private FormattedText|null $title = null,
        /** List of tasks in the checklist */
        #[SerializedName('tasks')]
        private array|null $tasks = null,
        /** True, if users other than creator of the list can add tasks to the list */
        #[SerializedName('others_can_add_tasks')]
        private bool $othersCanAddTasks,
        /** True, if the current user can add tasks to the list if they have Telegram Premium subscription */
        #[SerializedName('can_add_tasks')]
        private bool $canAddTasks,
        /** True, if users other than creator of the list can mark tasks as done or not done. If true, then the checklist is called "group checklist" */
        #[SerializedName('others_can_mark_tasks_as_done')]
        private bool $othersCanMarkTasksAsDone,
        /** True, if the current user can mark tasks as done or not done if they have Telegram Premium subscription */
        #[SerializedName('can_mark_tasks_as_done')]
        private bool $canMarkTasksAsDone,
    ) {
    }

    /**
     * Get Title of the checklist; may contain only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities.
     */
    public function getTitle(): FormattedText|null
    {
        return $this->title;
    }

    /**
     * Set Title of the checklist; may contain only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities.
     */
    public function setTitle(FormattedText|null $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get List of tasks in the checklist.
     */
    public function getTasks(): array|null
    {
        return $this->tasks;
    }

    /**
     * Set List of tasks in the checklist.
     */
    public function setTasks(array|null $tasks): self
    {
        $this->tasks = $tasks;

        return $this;
    }

    /**
     * Get True, if users other than creator of the list can add tasks to the list.
     */
    public function getOthersCanAddTasks(): bool
    {
        return $this->othersCanAddTasks;
    }

    /**
     * Set True, if users other than creator of the list can add tasks to the list.
     */
    public function setOthersCanAddTasks(bool $othersCanAddTasks): self
    {
        $this->othersCanAddTasks = $othersCanAddTasks;

        return $this;
    }

    /**
     * Get True, if the current user can add tasks to the list if they have Telegram Premium subscription.
     */
    public function getCanAddTasks(): bool
    {
        return $this->canAddTasks;
    }

    /**
     * Set True, if the current user can add tasks to the list if they have Telegram Premium subscription.
     */
    public function setCanAddTasks(bool $canAddTasks): self
    {
        $this->canAddTasks = $canAddTasks;

        return $this;
    }

    /**
     * Get True, if users other than creator of the list can mark tasks as done or not done. If true, then the checklist is called "group checklist".
     */
    public function getOthersCanMarkTasksAsDone(): bool
    {
        return $this->othersCanMarkTasksAsDone;
    }

    /**
     * Set True, if users other than creator of the list can mark tasks as done or not done. If true, then the checklist is called "group checklist".
     */
    public function setOthersCanMarkTasksAsDone(bool $othersCanMarkTasksAsDone): self
    {
        $this->othersCanMarkTasksAsDone = $othersCanMarkTasksAsDone;

        return $this;
    }

    /**
     * Get True, if the current user can mark tasks as done or not done if they have Telegram Premium subscription.
     */
    public function getCanMarkTasksAsDone(): bool
    {
        return $this->canMarkTasksAsDone;
    }

    /**
     * Set True, if the current user can mark tasks as done or not done if they have Telegram Premium subscription.
     */
    public function setCanMarkTasksAsDone(bool $canMarkTasksAsDone): self
    {
        $this->canMarkTasksAsDone = $canMarkTasksAsDone;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checklist',
            'title' => $this->getTitle(),
            'tasks' => $this->getTasks(),
            'others_can_add_tasks' => $this->getOthersCanAddTasks(),
            'can_add_tasks' => $this->getCanAddTasks(),
            'others_can_mark_tasks_as_done' => $this->getOthersCanMarkTasksAsDone(),
            'can_mark_tasks_as_done' => $this->getCanMarkTasksAsDone(),
        ];
    }
}
