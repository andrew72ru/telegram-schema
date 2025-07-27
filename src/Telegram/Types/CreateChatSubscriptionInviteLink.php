<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Creates a new subscription invite link for a channel chat. Requires can_invite_users right in the chat.
 */
class CreateChatSubscriptionInviteLink extends ChatInviteLink implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Invite link name; 0-32 characters */
        #[SerializedName('name')]
        private string $name,
        /** Information about subscription plan that will be applied to the users joining the chat via the link. */
        #[SerializedName('subscription_pricing')]
        private StarSubscriptionPricing|null $subscriptionPricing = null,
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
     * Get Information about subscription plan that will be applied to the users joining the chat via the link..
     */
    public function getSubscriptionPricing(): StarSubscriptionPricing|null
    {
        return $this->subscriptionPricing;
    }

    /**
     * Set Information about subscription plan that will be applied to the users joining the chat via the link..
     */
    public function setSubscriptionPricing(StarSubscriptionPricing|null $subscriptionPricing): self
    {
        $this->subscriptionPricing = $subscriptionPricing;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createChatSubscriptionInviteLink',
            'chat_id' => $this->getChatId(),
            'name' => $this->getName(),
            'subscription_pricing' => $this->getSubscriptionPricing(),
        ];
    }
}
