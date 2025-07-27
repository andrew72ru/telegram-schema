<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes messages.
 */
class DeleteMessages extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifiers of the messages to be deleted. Use messageProperties.can_be_deleted_only_for_self and messageProperties.can_be_deleted_for_all_users to get suitable messages */
        #[SerializedName('message_ids')]
        private array|null $messageIds = null,
        /** Pass true to delete messages for all chat members. Always true for supergroups, channels and secret chats */
        #[SerializedName('revoke')]
        private bool $revoke,
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
     * Get Identifiers of the messages to be deleted. Use messageProperties.can_be_deleted_only_for_self and messageProperties.can_be_deleted_for_all_users to get suitable messages.
     */
    public function getMessageIds(): array|null
    {
        return $this->messageIds;
    }

    /**
     * Set Identifiers of the messages to be deleted. Use messageProperties.can_be_deleted_only_for_self and messageProperties.can_be_deleted_for_all_users to get suitable messages.
     */
    public function setMessageIds(array|null $messageIds): self
    {
        $this->messageIds = $messageIds;

        return $this;
    }

    /**
     * Get Pass true to delete messages for all chat members. Always true for supergroups, channels and secret chats.
     */
    public function getRevoke(): bool
    {
        return $this->revoke;
    }

    /**
     * Set Pass true to delete messages for all chat members. Always true for supergroups, channels and secret chats.
     */
    public function setRevoke(bool $revoke): self
    {
        $this->revoke = $revoke;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteMessages',
            'chat_id' => $this->getChatId(),
            'message_ids' => $this->getMessageIds(),
            'revoke' => $this->getRevoke(),
        ];
    }
}
