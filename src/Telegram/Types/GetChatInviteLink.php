<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about an invite link. Requires administrator privileges and can_invite_users right in the chat to get own links and owner privileges to get other links
 */
class GetChatInviteLink extends ChatInviteLink implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Invite link to get */
        #[SerializedName('invite_link')]
        private string $inviteLink,
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
     * Get Invite link to get
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * Set Invite link to get
     */
    public function setInviteLink(string $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatInviteLink',
            'chat_id' => $this->getChatId(),
            'invite_link' => $this->getInviteLink(),
        ];
    }
}
