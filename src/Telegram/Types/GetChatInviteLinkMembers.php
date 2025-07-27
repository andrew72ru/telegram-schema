<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns chat members joined a chat via an invite link. Requires administrator privileges and can_invite_users right in the chat for own links and owner privileges for other links.
 */
class GetChatInviteLinkMembers extends ChatInviteLinkMembers implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Invite link for which to return chat members */
        #[SerializedName('invite_link')]
        private string $inviteLink,
        /** Pass true if the link is a subscription link and only members with expired subscription must be returned */
        #[SerializedName('only_with_expired_subscription')]
        private bool $onlyWithExpiredSubscription,
        /** A chat member from which to return next chat members; pass null to get results from the beginning */
        #[SerializedName('offset_member')]
        private ChatInviteLinkMember|null $offsetMember = null,
        /** The maximum number of chat members to return; up to 100 */
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
     * Get Invite link for which to return chat members.
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * Set Invite link for which to return chat members.
     */
    public function setInviteLink(string $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    /**
     * Get Pass true if the link is a subscription link and only members with expired subscription must be returned.
     */
    public function getOnlyWithExpiredSubscription(): bool
    {
        return $this->onlyWithExpiredSubscription;
    }

    /**
     * Set Pass true if the link is a subscription link and only members with expired subscription must be returned.
     */
    public function setOnlyWithExpiredSubscription(bool $onlyWithExpiredSubscription): self
    {
        $this->onlyWithExpiredSubscription = $onlyWithExpiredSubscription;

        return $this;
    }

    /**
     * Get A chat member from which to return next chat members; pass null to get results from the beginning.
     */
    public function getOffsetMember(): ChatInviteLinkMember|null
    {
        return $this->offsetMember;
    }

    /**
     * Set A chat member from which to return next chat members; pass null to get results from the beginning.
     */
    public function setOffsetMember(ChatInviteLinkMember|null $offsetMember): self
    {
        $this->offsetMember = $offsetMember;

        return $this;
    }

    /**
     * Get The maximum number of chat members to return; up to 100.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of chat members to return; up to 100.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatInviteLinkMembers',
            'chat_id' => $this->getChatId(),
            'invite_link' => $this->getInviteLink(),
            'only_with_expired_subscription' => $this->getOnlyWithExpiredSubscription(),
            'offset_member' => $this->getOffsetMember(),
            'limit' => $this->getLimit(),
        ];
    }
}
