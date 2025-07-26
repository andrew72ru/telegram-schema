<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns invite links for a chat created by specified administrator. Requires administrator privileges and can_invite_users right in the chat to get own links and owner privileges to get other links
 */
class GetChatInviteLinks extends ChatInviteLinks implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** User identifier of a chat administrator. Must be an identifier of the current user for non-owner */
        #[SerializedName('creator_user_id')]
        private int $creatorUserId,
        /** Pass true if revoked links needs to be returned instead of active or expired */
        #[SerializedName('is_revoked')]
        private bool $isRevoked,
        /** Creation date of an invite link starting after which to return invite links; use 0 to get results from the beginning */
        #[SerializedName('offset_date')]
        private int $offsetDate,
        /** Invite link starting after which to return invite links; use empty string to get results from the beginning */
        #[SerializedName('offset_invite_link')]
        private string $offsetInviteLink,
        /** The maximum number of invite links to return; up to 100 */
        #[SerializedName('limit')]
        private int $limit,
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
     * Get User identifier of a chat administrator. Must be an identifier of the current user for non-owner
     */
    public function getCreatorUserId(): int
    {
        return $this->creatorUserId;
    }

    /**
     * Set User identifier of a chat administrator. Must be an identifier of the current user for non-owner
     */
    public function setCreatorUserId(int $creatorUserId): self
    {
        $this->creatorUserId = $creatorUserId;

        return $this;
    }

    /**
     * Get Pass true if revoked links needs to be returned instead of active or expired
     */
    public function getIsRevoked(): bool
    {
        return $this->isRevoked;
    }

    /**
     * Set Pass true if revoked links needs to be returned instead of active or expired
     */
    public function setIsRevoked(bool $isRevoked): self
    {
        $this->isRevoked = $isRevoked;

        return $this;
    }

    /**
     * Get Creation date of an invite link starting after which to return invite links; use 0 to get results from the beginning
     */
    public function getOffsetDate(): int
    {
        return $this->offsetDate;
    }

    /**
     * Set Creation date of an invite link starting after which to return invite links; use 0 to get results from the beginning
     */
    public function setOffsetDate(int $offsetDate): self
    {
        $this->offsetDate = $offsetDate;

        return $this;
    }

    /**
     * Get Invite link starting after which to return invite links; use empty string to get results from the beginning
     */
    public function getOffsetInviteLink(): string
    {
        return $this->offsetInviteLink;
    }

    /**
     * Set Invite link starting after which to return invite links; use empty string to get results from the beginning
     */
    public function setOffsetInviteLink(string $offsetInviteLink): self
    {
        $this->offsetInviteLink = $offsetInviteLink;

        return $this;
    }

    /**
     * Get The maximum number of invite links to return; up to 100
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of invite links to return; up to 100
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatInviteLinks',
            'chat_id' => $this->getChatId(),
            'creator_user_id' => $this->getCreatorUserId(),
            'is_revoked' => $this->getIsRevoked(),
            'offset_date' => $this->getOffsetDate(),
            'offset_invite_link' => $this->getOffsetInviteLink(),
            'limit' => $this->getLimit(),
        ];
    }
}
