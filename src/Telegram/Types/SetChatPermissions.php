<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the chat members permissions. Supported only for basic groups and supergroups. Requires can_restrict_members administrator right
 */
class SetChatPermissions extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** New non-administrator members permissions in the chat */
        #[SerializedName('permissions')]
        private ChatPermissions|null $permissions = null,
    ) {
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get New non-administrator members permissions in the chat
     */
    public function getPermissions(): ChatPermissions|null
    {
        return $this->permissions;
    }

    /**
     * Set New non-administrator members permissions in the chat
     */
    public function setPermissions(ChatPermissions|null $permissions): self
    {
        $this->permissions = $permissions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setChatPermissions',
            'chat_id' => $this->getChatId(),
            'permissions' => $this->getPermissions(),
        ];
    }
}
