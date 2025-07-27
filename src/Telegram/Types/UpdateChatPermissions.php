<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Chat permissions were changed @chat_id Chat identifier @permissions The new chat permissions.
 */
class UpdateChatPermissions extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('permissions')]
        private ChatPermissions|null $permissions = null,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function getPermissions(): ChatPermissions|null
    {
        return $this->permissions;
    }

    public function setPermissions(ChatPermissions|null $permissions): self
    {
        $this->permissions = $permissions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatPermissions',
            'chat_id' => $this->getChatId(),
            'permissions' => $this->getPermissions(),
        ];
    }
}
