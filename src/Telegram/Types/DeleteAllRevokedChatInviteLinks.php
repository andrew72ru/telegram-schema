<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes all revoked chat invite links created by a given chat administrator. Requires administrator privileges and can_invite_users right in the chat for own links and owner privileges for other links
 */
class DeleteAllRevokedChatInviteLinks extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** User identifier of a chat administrator, which links will be deleted. Must be an identifier of the current user for non-owner */
        #[SerializedName('creator_user_id')]
        private int $creatorUserId,
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
     * Get User identifier of a chat administrator, which links will be deleted. Must be an identifier of the current user for non-owner
     */
    public function getCreatorUserId(): int
    {
        return $this->creatorUserId;
    }

    /**
     * Set User identifier of a chat administrator, which links will be deleted. Must be an identifier of the current user for non-owner
     */
    public function setCreatorUserId(int $creatorUserId): self
    {
        $this->creatorUserId = $creatorUserId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteAllRevokedChatInviteLinks',
            'chat_id' => $this->getChatId(),
            'creator_user_id' => $this->getCreatorUserId(),
        ];
    }
}
