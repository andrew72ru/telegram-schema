<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat title was changed @old_title Previous chat title @new_title New chat title
 */
class ChatEventTitleChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_title')]
        private string $oldTitle,
        #[SerializedName('new_title')]
        private string $newTitle,
    ) {
    }

    public function getOldTitle(): string
    {
        return $this->oldTitle;
    }

    public function setOldTitle(string $oldTitle): self
    {
        $this->oldTitle = $oldTitle;

        return $this;
    }

    public function getNewTitle(): string
    {
        return $this->newTitle;
    }

    public function setNewTitle(string $newTitle): self
    {
        $this->newTitle = $newTitle;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventTitleChanged',
            'old_title' => $this->getOldTitle(),
            'new_title' => $this->getNewTitle(),
        ];
    }
}
