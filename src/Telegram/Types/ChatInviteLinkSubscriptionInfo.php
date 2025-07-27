<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about subscription plan that must be paid by the user to use a chat invite link.
 */
class ChatInviteLinkSubscriptionInfo implements \JsonSerializable
{
    public function __construct(
        /** Information about subscription plan that must be paid by the user to use the link */
        #[SerializedName('pricing')]
        private StarSubscriptionPricing|null $pricing = null,
        /** True, if the user has already paid for the subscription and can use joinChatByInviteLink to join the subscribed chat again */
        #[SerializedName('can_reuse')]
        private bool $canReuse,
        /** Identifier of the payment form to use for subscription payment; 0 if the subscription can't be paid */
        #[SerializedName('form_id')]
        private int $formId,
    ) {
    }

    /**
     * Get Information about subscription plan that must be paid by the user to use the link.
     */
    public function getPricing(): StarSubscriptionPricing|null
    {
        return $this->pricing;
    }

    /**
     * Set Information about subscription plan that must be paid by the user to use the link.
     */
    public function setPricing(StarSubscriptionPricing|null $pricing): self
    {
        $this->pricing = $pricing;

        return $this;
    }

    /**
     * Get True, if the user has already paid for the subscription and can use joinChatByInviteLink to join the subscribed chat again.
     */
    public function getCanReuse(): bool
    {
        return $this->canReuse;
    }

    /**
     * Set True, if the user has already paid for the subscription and can use joinChatByInviteLink to join the subscribed chat again.
     */
    public function setCanReuse(bool $canReuse): self
    {
        $this->canReuse = $canReuse;

        return $this;
    }

    /**
     * Get Identifier of the payment form to use for subscription payment; 0 if the subscription can't be paid.
     */
    public function getFormId(): int
    {
        return $this->formId;
    }

    /**
     * Set Identifier of the payment form to use for subscription payment; 0 if the subscription can't be paid.
     */
    public function setFormId(int $formId): self
    {
        $this->formId = $formId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatInviteLinkSubscriptionInfo',
            'pricing' => $this->getPricing(),
            'can_reuse' => $this->getCanReuse(),
            'form_id' => $this->getFormId(),
        ];
    }
}
