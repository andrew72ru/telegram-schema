<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns pending join requests in a chat.
 */
class GetChatJoinRequests extends ChatJoinRequests implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Invite link for which to return join requests. If empty, all join requests will be returned. Requires administrator privileges and can_invite_users right in the chat for own links and owner privileges for other links */
        #[SerializedName('invite_link')]
        private string $inviteLink,
        /** A query to search for in the first names, last names and usernames of the users to return */
        #[SerializedName('query')]
        private string $query,
        /** A chat join request from which to return next requests; pass null to get results from the beginning */
        #[SerializedName('offset_request')]
        private ChatJoinRequest|null $offsetRequest = null,
        /** The maximum number of requests to join the chat to return */
        #[SerializedName('limit')]
        private int $limit,
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
     * Get Invite link for which to return join requests. If empty, all join requests will be returned. Requires administrator privileges and can_invite_users right in the chat for own links and owner privileges for other links.
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * Set Invite link for which to return join requests. If empty, all join requests will be returned. Requires administrator privileges and can_invite_users right in the chat for own links and owner privileges for other links.
     */
    public function setInviteLink(string $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    /**
     * Get A query to search for in the first names, last names and usernames of the users to return.
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Set A query to search for in the first names, last names and usernames of the users to return.
     */
    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get A chat join request from which to return next requests; pass null to get results from the beginning.
     */
    public function getOffsetRequest(): ChatJoinRequest|null
    {
        return $this->offsetRequest;
    }

    /**
     * Set A chat join request from which to return next requests; pass null to get results from the beginning.
     */
    public function setOffsetRequest(ChatJoinRequest|null $offsetRequest): self
    {
        $this->offsetRequest = $offsetRequest;

        return $this;
    }

    /**
     * Get The maximum number of requests to join the chat to return.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of requests to join the chat to return.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatJoinRequests',
            'chat_id' => $this->getChatId(),
            'invite_link' => $this->getInviteLink(),
            'query' => $this->getQuery(),
            'offset_request' => $this->getOffsetRequest(),
            'limit' => $this->getLimit(),
        ];
    }
}
