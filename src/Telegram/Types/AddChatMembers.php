<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds multiple new members to a chat; requires can_invite_users member right. Currently, this method is only available for supergroups and channels.
 */
class AddChatMembers extends FailedToAddMembers implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifiers of the users to be added to the chat. The maximum number of added users is 20 for supergroups and 100 for channels */
        #[SerializedName('user_ids')]
        private array|null $userIds = null,
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
     * Get Identifiers of the users to be added to the chat. The maximum number of added users is 20 for supergroups and 100 for channels
     */
    public function getUserIds(): array|null
    {
        return $this->userIds;
    }

    /**
     * Set Identifiers of the users to be added to the chat. The maximum number of added users is 20 for supergroups and 100 for channels
     */
    public function setUserIds(array|null $userIds): self
    {
        $this->userIds = $userIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addChatMembers',
            'chat_id' => $this->getChatId(),
            'user_ids' => $this->getUserIds(),
        ];
    }
}
