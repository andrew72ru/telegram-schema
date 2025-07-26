<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat description was changed @old_description Previous chat description @new_description New chat description
 */
class ChatEventDescriptionChanged extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_description')]
        private string $oldDescription,
        #[SerializedName('new_description')]
        private string $newDescription,
    ) {
    }

    public function getOldDescription(): string
    {
        return $this->oldDescription;
    }

    public function setOldDescription(string $oldDescription): self
    {
        $this->oldDescription = $oldDescription;

        return $this;
    }

    public function getNewDescription(): string
    {
        return $this->newDescription;
    }

    public function setNewDescription(string $newDescription): self
    {
        $this->newDescription = $newDescription;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventDescriptionChanged',
            'old_description' => $this->getOldDescription(),
            'new_description' => $this->getNewDescription(),
        ];
    }
}
