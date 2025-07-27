<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Creates a new invite link for a chat. Available for basic groups, supergroups, and channels. Requires administrator privileges and can_invite_users right in the chat.
 */
class CreateChatInviteLink extends ChatInviteLink implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Invite link name; 0-32 characters */
        #[SerializedName('name')]
        private string $name,
        /** Point in time (Unix timestamp) when the link will expire; pass 0 if never */
        #[SerializedName('expiration_date')]
        private int $expirationDate,
        /** The maximum number of chat members that can join the chat via the link simultaneously; 0-99999; pass 0 if not limited */
        #[SerializedName('member_limit')]
        private int $memberLimit,
        /** Pass true if users joining the chat via the link need to be approved by chat administrators. In this case, member_limit must be 0 */
        #[SerializedName('creates_join_request')]
        private bool $createsJoinRequest,
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

    /**
     * Get Point in time (Unix timestamp) when the link will expire; pass 0 if never.
     */
    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the link will expire; pass 0 if never.
     */
    public function setExpirationDate(int $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get The maximum number of chat members that can join the chat via the link simultaneously; 0-99999; pass 0 if not limited.
     */
    public function getMemberLimit(): int
    {
        return $this->memberLimit;
    }

    /**
     * Set The maximum number of chat members that can join the chat via the link simultaneously; 0-99999; pass 0 if not limited.
     */
    public function setMemberLimit(int $memberLimit): self
    {
        $this->memberLimit = $memberLimit;

        return $this;
    }

    /**
     * Get Pass true if users joining the chat via the link need to be approved by chat administrators. In this case, member_limit must be 0.
     */
    public function getCreatesJoinRequest(): bool
    {
        return $this->createsJoinRequest;
    }

    /**
     * Set Pass true if users joining the chat via the link need to be approved by chat administrators. In this case, member_limit must be 0.
     */
    public function setCreatesJoinRequest(bool $createsJoinRequest): self
    {
        $this->createsJoinRequest = $createsJoinRequest;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createChatInviteLink',
            'chat_id' => $this->getChatId(),
            'name' => $this->getName(),
            'expiration_date' => $this->getExpirationDate(),
            'member_limit' => $this->getMemberLimit(),
            'creates_join_request' => $this->getCreatesJoinRequest(),
        ];
    }
}
