<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a subscription to a channel chat
 */
class StarSubscriptionTypeChannel extends StarSubscriptionType implements \JsonSerializable
{
    public function __construct(
        /** True, if the subscription is active and the user can use the method reuseStarSubscription to join the subscribed chat again */
        #[SerializedName('can_reuse')]
        private bool $canReuse,
        /** The invite link that can be used to renew the subscription if it has been expired; may be empty, if the link isn't available anymore */
        #[SerializedName('invite_link')]
        private string $inviteLink,
    ) {
    }

    /**
     * Get True, if the subscription is active and the user can use the method reuseStarSubscription to join the subscribed chat again
     */
    public function getCanReuse(): bool
    {
        return $this->canReuse;
    }

    /**
     * Set True, if the subscription is active and the user can use the method reuseStarSubscription to join the subscribed chat again
     */
    public function setCanReuse(bool $canReuse): self
    {
        $this->canReuse = $canReuse;

        return $this;
    }

    /**
     * Get The invite link that can be used to renew the subscription if it has been expired; may be empty, if the link isn't available anymore
     */
    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    /**
     * Set The invite link that can be used to renew the subscription if it has been expired; may be empty, if the link isn't available anymore
     */
    public function setInviteLink(string $inviteLink): self
    {
        $this->inviteLink = $inviteLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starSubscriptionTypeChannel',
            'can_reuse' => $this->getCanReuse(),
            'invite_link' => $this->getInviteLink(),
        ];
    }
}
