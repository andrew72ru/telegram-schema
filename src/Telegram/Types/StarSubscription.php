<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about subscription to a channel chat, a bot, or a business account that was paid in Telegram Stars.
 */
class StarSubscription implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the subscription */
        #[SerializedName('id')]
        private string $id,
        /** Identifier of the chat that is subscribed */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Point in time (Unix timestamp) when the subscription will expire or expired */
        #[SerializedName('expiration_date')]
        private int $expirationDate,
        /** True, if the subscription was canceled */
        #[SerializedName('is_canceled')]
        private bool $isCanceled,
        /** True, if the subscription expires soon and there are no enough Telegram Stars on the user's balance to extend it */
        #[SerializedName('is_expiring')]
        private bool $isExpiring,
        /** The subscription plan */
        #[SerializedName('pricing')]
        private StarSubscriptionPricing|null $pricing = null,
        /** Type of the subscription */
        #[SerializedName('type')]
        private StarSubscriptionType|null $type = null,
    ) {
    }

    /**
     * Get Unique identifier of the subscription.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the subscription.
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Identifier of the chat that is subscribed.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat that is subscribed.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the subscription will expire or expired.
     */
    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the subscription will expire or expired.
     */
    public function setExpirationDate(int $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get True, if the subscription was canceled.
     */
    public function getIsCanceled(): bool
    {
        return $this->isCanceled;
    }

    /**
     * Set True, if the subscription was canceled.
     */
    public function setIsCanceled(bool $isCanceled): self
    {
        $this->isCanceled = $isCanceled;

        return $this;
    }

    /**
     * Get True, if the subscription expires soon and there are no enough Telegram Stars on the user's balance to extend it.
     */
    public function getIsExpiring(): bool
    {
        return $this->isExpiring;
    }

    /**
     * Set True, if the subscription expires soon and there are no enough Telegram Stars on the user's balance to extend it.
     */
    public function setIsExpiring(bool $isExpiring): self
    {
        $this->isExpiring = $isExpiring;

        return $this;
    }

    /**
     * Get The subscription plan.
     */
    public function getPricing(): StarSubscriptionPricing|null
    {
        return $this->pricing;
    }

    /**
     * Set The subscription plan.
     */
    public function setPricing(StarSubscriptionPricing|null $pricing): self
    {
        $this->pricing = $pricing;

        return $this;
    }

    /**
     * Get Type of the subscription.
     */
    public function getType(): StarSubscriptionType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the subscription.
     */
    public function setType(StarSubscriptionType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starSubscription',
            'id' => $this->getId(),
            'chat_id' => $this->getChatId(),
            'expiration_date' => $this->getExpirationDate(),
            'is_canceled' => $this->getIsCanceled(),
            'is_expiring' => $this->getIsExpiring(),
            'pricing' => $this->getPricing(),
            'type' => $this->getType(),
        ];
    }
}
