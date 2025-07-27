<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a chat invite link.
 */
class ChatInviteLink implements \JsonSerializable
{
    public function __construct(
        /** Chat invite link */
        #[SerializedName('invite_link')]
        private string $inviteLink,
        /** Name of the link */
        #[SerializedName('name')]
        private string $name,
        /** User identifier of an administrator created the link */
        #[SerializedName('creator_user_id')]
        private int $creatorUserId,
        /** Point in time (Unix timestamp) when the link was created */
        #[SerializedName('date')]
        private int $date,
        /** Point in time (Unix timestamp) when the link was last edited; 0 if never or unknown */
        #[SerializedName('edit_date')]
        private int $editDate,
        /** Point in time (Unix timestamp) when the link will expire; 0 if never */
        #[SerializedName('expiration_date')]
        private int $expirationDate,
        /** Information about subscription plan that is applied to the users joining the chat by the link; may be null if the link doesn't require subscription */
        #[SerializedName('subscription_pricing')]
        private StarSubscriptionPricing|null $subscriptionPricing = null,
        /** The maximum number of members, which can join the chat using the link simultaneously; 0 if not limited. Always 0 if the link requires approval */
        #[SerializedName('member_limit')]
        private int $memberLimit,
        /** Number of chat members, which joined the chat using the link */
        #[SerializedName('member_count')]
        private int $memberCount,
        /** Number of chat members, which joined the chat using the link, but have already left because of expired subscription; for subscription links only */
        #[SerializedName('expired_member_count')]
        private int $expiredMemberCount,
        /** Number of pending join requests created using this link */
        #[SerializedName('pending_join_request_count')]
        private int $pendingJoinRequestCount,
        /** True, if the link only creates join request. If true, total number of joining members will be unlimited */
        #[SerializedName('creates_join_request')]
        private bool $createsJoinRequest,
        /** True, if the link is primary. Primary invite link can't have name, expiration date, or usage limit. There is exactly one primary invite link for each administrator with can_invite_users right at a given time */
        #[SerializedName('is_primary')]
        private bool $isPrimary,
        /** True, if the link was revoked */
        #[SerializedName('is_revoked')]
        private bool $isRevoked,
    ) {
    }

    /**
     * Get Chat invite link.
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * Set Chat invite link.
     */
    public function setInviteLink(string $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    /**
     * Get Name of the link.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Name of the link.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get User identifier of an administrator created the link.
     */
    public function getCreatorUserId(): int
    {
        return $this->creatorUserId;
    }

    /**
     * Set User identifier of an administrator created the link.
     */
    public function setCreatorUserId(int $creatorUserId): self
    {
        $this->creatorUserId = $creatorUserId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the link was created.
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the link was created.
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the link was last edited; 0 if never or unknown.
     */
    public function getEditDate(): int
    {
        return $this->editDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the link was last edited; 0 if never or unknown.
     */
    public function setEditDate(int $editDate): self
    {
        $this->editDate = $editDate;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the link will expire; 0 if never.
     */
    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the link will expire; 0 if never.
     */
    public function setExpirationDate(int $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get Information about subscription plan that is applied to the users joining the chat by the link; may be null if the link doesn't require subscription.
     */
    public function getSubscriptionPricing(): StarSubscriptionPricing|null
    {
        return $this->subscriptionPricing;
    }

    /**
     * Set Information about subscription plan that is applied to the users joining the chat by the link; may be null if the link doesn't require subscription.
     */
    public function setSubscriptionPricing(StarSubscriptionPricing|null $subscriptionPricing): self
    {
        $this->subscriptionPricing = $subscriptionPricing;

        return $this;
    }

    /**
     * Get The maximum number of members, which can join the chat using the link simultaneously; 0 if not limited. Always 0 if the link requires approval.
     */
    public function getMemberLimit(): int
    {
        return $this->memberLimit;
    }

    /**
     * Set The maximum number of members, which can join the chat using the link simultaneously; 0 if not limited. Always 0 if the link requires approval.
     */
    public function setMemberLimit(int $memberLimit): self
    {
        $this->memberLimit = $memberLimit;

        return $this;
    }

    /**
     * Get Number of chat members, which joined the chat using the link.
     */
    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    /**
     * Set Number of chat members, which joined the chat using the link.
     */
    public function setMemberCount(int $memberCount): self
    {
        $this->memberCount = $memberCount;

        return $this;
    }

    /**
     * Get Number of chat members, which joined the chat using the link, but have already left because of expired subscription; for subscription links only.
     */
    public function getExpiredMemberCount(): int
    {
        return $this->expiredMemberCount;
    }

    /**
     * Set Number of chat members, which joined the chat using the link, but have already left because of expired subscription; for subscription links only.
     */
    public function setExpiredMemberCount(int $expiredMemberCount): self
    {
        $this->expiredMemberCount = $expiredMemberCount;

        return $this;
    }

    /**
     * Get Number of pending join requests created using this link.
     */
    public function getPendingJoinRequestCount(): int
    {
        return $this->pendingJoinRequestCount;
    }

    /**
     * Set Number of pending join requests created using this link.
     */
    public function setPendingJoinRequestCount(int $pendingJoinRequestCount): self
    {
        $this->pendingJoinRequestCount = $pendingJoinRequestCount;

        return $this;
    }

    /**
     * Get True, if the link only creates join request. If true, total number of joining members will be unlimited.
     */
    public function getCreatesJoinRequest(): bool
    {
        return $this->createsJoinRequest;
    }

    /**
     * Set True, if the link only creates join request. If true, total number of joining members will be unlimited.
     */
    public function setCreatesJoinRequest(bool $createsJoinRequest): self
    {
        $this->createsJoinRequest = $createsJoinRequest;

        return $this;
    }

    /**
     * Get True, if the link is primary. Primary invite link can't have name, expiration date, or usage limit. There is exactly one primary invite link for each administrator with can_invite_users right at a given time.
     */
    public function getIsPrimary(): bool
    {
        return $this->isPrimary;
    }

    /**
     * Set True, if the link is primary. Primary invite link can't have name, expiration date, or usage limit. There is exactly one primary invite link for each administrator with can_invite_users right at a given time.
     */
    public function setIsPrimary(bool $isPrimary): self
    {
        $this->isPrimary = $isPrimary;

        return $this;
    }

    /**
     * Get True, if the link was revoked.
     */
    public function getIsRevoked(): bool
    {
        return $this->isRevoked;
    }

    /**
     * Set True, if the link was revoked.
     */
    public function setIsRevoked(bool $isRevoked): self
    {
        $this->isRevoked = $isRevoked;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatInviteLink',
            'invite_link' => $this->getInviteLink(),
            'name' => $this->getName(),
            'creator_user_id' => $this->getCreatorUserId(),
            'date' => $this->getDate(),
            'edit_date' => $this->getEditDate(),
            'expiration_date' => $this->getExpirationDate(),
            'subscription_pricing' => $this->getSubscriptionPricing(),
            'member_limit' => $this->getMemberLimit(),
            'member_count' => $this->getMemberCount(),
            'expired_member_count' => $this->getExpiredMemberCount(),
            'pending_join_request_count' => $this->getPendingJoinRequestCount(),
            'creates_join_request' => $this->getCreatesJoinRequest(),
            'is_primary' => $this->getIsPrimary(),
            'is_revoked' => $this->getIsRevoked(),
        ];
    }
}
