<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a checklist to be sent.
 */
class InputChecklist implements \JsonSerializable
{
    public function __construct(
        /** Title of the checklist; 1-getOption("checklist_title_length_max") characters. May contain only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities */
        #[SerializedName('title')]
        private FormattedText|null $title = null,
        /** List of tasks in the checklist; 1-getOption("checklist_task_count_max") tasks */
        #[SerializedName('tasks')]
        private array|null $tasks = null,
        /** True, if other users can add tasks to the list */
        #[SerializedName('others_can_add_tasks')]
        private bool $othersCanAddTasks,
        /** True, if other users can mark tasks as done or not done */
        #[SerializedName('others_can_mark_tasks_as_done')]
        private bool $othersCanMarkTasksAsDone,
    ) {
    }

    /**
     * Get Title of the checklist; 1-getOption("checklist_title_length_max") characters. May contain only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities.
     */
    public function getTitle(): FormattedText|null
    {
        return $this->title;
    }

    /**
     * Set Title of the checklist; 1-getOption("checklist_title_length_max") characters. May contain only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities.
     */
    public function setTitle(FormattedText|null $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get List of tasks in the checklist; 1-getOption("checklist_task_count_max") tasks.
     */
    public function getTasks(): array|null
    {
        return $this->tasks;
    }

    /**
     * Set List of tasks in the checklist; 1-getOption("checklist_task_count_max") tasks.
     */
    public function setTasks(array|null $tasks): self
    {
        $this->tasks = $tasks;

        return $this;
    }

    /**
     * Get True, if other users can add tasks to the list.
     */
    public function getOthersCanAddTasks(): bool
    {
        return $this->othersCanAddTasks;
    }

    /**
     * Set True, if other users can add tasks to the list.
     */
    public function setOthersCanAddTasks(bool $othersCanAddTasks): self
    {
        $this->othersCanAddTasks = $othersCanAddTasks;

        return $this;
    }

    /**
     * Get True, if other users can mark tasks as done or not done.
     */
    public function getOthersCanMarkTasksAsDone(): bool
    {
        return $this->othersCanMarkTasksAsDone;
    }

    /**
     * Set True, if other users can mark tasks as done or not done.
     */
    public function setOthersCanMarkTasksAsDone(bool $othersCanMarkTasksAsDone): self
    {
        $this->othersCanMarkTasksAsDone = $othersCanMarkTasksAsDone;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputChecklist',
            'title' => $this->getTitle(),
            'tasks' => $this->getTasks(),
            'others_can_add_tasks' => $this->getOthersCanAddTasks(),
            'others_can_mark_tasks_as_done' => $this->getOthersCanMarkTasksAsDone(),
        ];
    }
}
