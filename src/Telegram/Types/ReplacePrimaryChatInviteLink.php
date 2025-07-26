<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Replaces current primary invite link for a chat with a new primary invite link. Available for basic groups, supergroups, and channels. Requires administrator privileges and can_invite_users right @chat_id Chat identifier
 */
class ReplacePrimaryChatInviteLink extends ChatInviteLink implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'replacePrimaryChatInviteLink',
            'chat_id' => $this->getChatId(),
        ];
    }
}
