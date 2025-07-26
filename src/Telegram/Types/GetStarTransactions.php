<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of Telegram Star transactions for the specified owner
 */
class GetStarTransactions extends StarTransactions implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the owner of the Telegram Stars; can be the identifier of the current user, identifier of an owned bot, */
        #[SerializedName('owner_id')]
        private MessageSender|null $ownerId = null,
        /** If non-empty, only transactions related to the Star Subscription will be returned */
        #[SerializedName('subscription_id')]
        private string $subscriptionId,
        /** Direction of the transactions to receive; pass null to get all transactions */
        #[SerializedName('direction')]
        private StarTransactionDirection|null $direction = null,
        /** Offset of the first transaction to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of transactions to return */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Identifier of the owner of the Telegram Stars; can be the identifier of the current user, identifier of an owned bot,
     */
    public function getOwnerId(): MessageSender|null
    {
        return $this->ownerId;
    }

    /**
     * Set Identifier of the owner of the Telegram Stars; can be the identifier of the current user, identifier of an owned bot,
     */
    public function setOwnerId(MessageSender|null $ownerId): self
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get If non-empty, only transactions related to the Star Subscription will be returned
     */
    public function getSubscriptionId(): string
    {
        return $this->subscriptionId;
    }

    /**
     * Set If non-empty, only transactions related to the Star Subscription will be returned
     */
    public function setSubscriptionId(string $subscriptionId): self
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * Get Direction of the transactions to receive; pass null to get all transactions
     */
    public function getDirection(): StarTransactionDirection|null
    {
        return $this->direction;
    }

    /**
     * Set Direction of the transactions to receive; pass null to get all transactions
     */
    public function setDirection(StarTransactionDirection|null $direction): self
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get Offset of the first transaction to return as received from the previous request; use empty string to get the first chunk of results
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first transaction to return as received from the previous request; use empty string to get the first chunk of results
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of transactions to return
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of transactions to return
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStarTransactions',
            'owner_id' => $this->getOwnerId(),
            'subscription_id' => $this->getSubscriptionId(),
            'direction' => $this->getDirection(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
