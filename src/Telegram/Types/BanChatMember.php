<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Bans a member in a chat; requires can_restrict_members administrator right. Members can't be banned in private or secret chats. In supergroups and channels, the user will not be able to return to the group on their own using invite links, etc., unless unbanned first
 */
class BanChatMember extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Member identifier */
        #[SerializedName('member_id')]
        private MessageSender|null $memberId = null,
        /** Point in time (Unix timestamp) when the user will be unbanned; 0 if never. If the user is banned for more than 366 days or for less than 30 seconds from the current time, the user is considered to be banned forever. Ignored in basic groups and if a chat is banned */
        #[SerializedName('banned_until_date')]
        private int $bannedUntilDate,
        /** Pass true to delete all messages in the chat for the user that is being removed. Always true for supergroups and channels */
        #[SerializedName('revoke_messages')]
        private bool $revokeMessages,
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
     * Get Member identifier
     */
    public function getMemberId(): MessageSender|null
    {
        return $this->memberId;
    }

    /**
     * Set Member identifier
     */
    public function setMemberId(MessageSender|null $memberId): self
    {
        $this->memberId = $memberId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the user will be unbanned; 0 if never. If the user is banned for more than 366 days or for less than 30 seconds from the current time, the user is considered to be banned forever. Ignored in basic groups and if a chat is banned
     */
    public function getBannedUntilDate(): int
    {
        return $this->bannedUntilDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the user will be unbanned; 0 if never. If the user is banned for more than 366 days or for less than 30 seconds from the current time, the user is considered to be banned forever. Ignored in basic groups and if a chat is banned
     */
    public function setBannedUntilDate(int $bannedUntilDate): self
    {
        $this->bannedUntilDate = $bannedUntilDate;

        return $this;
    }

    /**
     * Get Pass true to delete all messages in the chat for the user that is being removed. Always true for supergroups and channels
     */
    public function getRevokeMessages(): bool
    {
        return $this->revokeMessages;
    }

    /**
     * Set Pass true to delete all messages in the chat for the user that is being removed. Always true for supergroups and channels
     */
    public function setRevokeMessages(bool $revokeMessages): self
    {
        $this->revokeMessages = $revokeMessages;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'banChatMember',
            'chat_id' => $this->getChatId(),
            'member_id' => $this->getMemberId(),
            'banned_until_date' => $this->getBannedUntilDate(),
            'revoke_messages' => $this->getRevokeMessages(),
        ];
    }
}
