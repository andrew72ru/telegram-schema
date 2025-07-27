<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a recommended chat folder @folder The chat folder @param_description Chat folder description.
 */
class RecommendedChatFolder implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('folder')]
        private ChatFolder|null $folder = null,
        /** Describes a recommended chat folder @folder The chat folder @param_description Chat folder description */
        #[SerializedName('description')]
        private string $description,
    ) {
    }

    public function getFolder(): ChatFolder|null
    {
        return $this->folder;
    }

    public function setFolder(ChatFolder|null $folder): self
    {
        $this->folder = $folder;

        return $this;
    }

    /**
     * Get Describes a recommended chat folder @folder The chat folder @param_description Chat folder description.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Describes a recommended chat folder @folder The chat folder @param_description Chat folder description.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'recommendedChatFolder',
            'folder' => $this->getFolder(),
            'description' => $this->getDescription(),
        ];
    }
}
