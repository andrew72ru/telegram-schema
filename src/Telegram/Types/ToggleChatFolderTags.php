<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether chat folder tags are enabled @are_tags_enabled Pass true to enable folder tags; pass false to disable them
 */
class ToggleChatFolderTags extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('are_tags_enabled')]
        private bool $areTagsEnabled,
    ) {
    }

    public function getAreTagsEnabled(): bool
    {
        return $this->areTagsEnabled;
    }

    public function setAreTagsEnabled(bool $areTagsEnabled): self
    {
        $this->areTagsEnabled = $areTagsEnabled;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleChatFolderTags',
            'are_tags_enabled' => $this->getAreTagsEnabled(),
        ];
    }
}
