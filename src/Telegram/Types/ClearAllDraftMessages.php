<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Clears message drafts in all chats @exclude_secret_chats Pass true to keep local message drafts in secret chats.
 */
class ClearAllDraftMessages extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('exclude_secret_chats')]
        private bool $excludeSecretChats,
    ) {
    }

    public function getExcludeSecretChats(): bool
    {
        return $this->excludeSecretChats;
    }

    public function setExcludeSecretChats(bool $excludeSecretChats): self
    {
        $this->excludeSecretChats = $excludeSecretChats;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'clearAllDraftMessages',
            'exclude_secret_chats' => $this->getExcludeSecretChats(),
        ];
    }
}
