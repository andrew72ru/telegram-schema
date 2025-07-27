<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Edits a subscription invite link for a channel chat. Requires can_invite_users right in the chat for own links and owner privileges for other links.
 */
class EditChatSubscriptionInviteLink extends ChatInviteLink implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Invite link to be edited */
        #[SerializedName('invite_link')]
        private string $inviteLink,
        /** Invite link name; 0-32 characters */
        #[SerializedName('name')]
        private string $name,
    ) {
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Invite link to be edited.
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * Set Invite link to be edited.
     */
    public function setInviteLink(string $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    /**
     * Get Invite link name; 0-32 characters.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Invite link name; 0-32 characters.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editChatSubscriptionInviteLink',
            'chat_id' => $this->getChatId(),
            'invite_link' => $this->getInviteLink(),
            'name' => $this->getName(),
        ];
    }
}
