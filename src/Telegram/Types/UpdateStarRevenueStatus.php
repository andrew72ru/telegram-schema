<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The Telegram Star revenue earned by a bot or a chat has changed. If Telegram Star transaction screen of the chat is opened, then getStarTransactions may be called to fetch new transactions
 */
class UpdateStarRevenueStatus extends Update implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the owner of the Telegram Stars */
        #[SerializedName('owner_id')]
        private MessageSender|null $ownerId = null,
        /** New Telegram Star revenue status */
        #[SerializedName('status')]
        private StarRevenueStatus|null $status = null,
    ) {
    }

    /**
     * Get Identifier of the owner of the Telegram Stars
     */
    public function getOwnerId(): MessageSender|null
    {
        return $this->ownerId;
    }

    /**
     * Set Identifier of the owner of the Telegram Stars
     */
    public function setOwnerId(MessageSender|null $ownerId): self
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get New Telegram Star revenue status
     */
    public function getStatus(): StarRevenueStatus|null
    {
        return $this->status;
    }

    /**
     * Set New Telegram Star revenue status
     */
    public function setStatus(StarRevenueStatus|null $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateStarRevenueStatus',
            'owner_id' => $this->getOwnerId(),
            'status' => $this->getStatus(),
        ];
    }
}
