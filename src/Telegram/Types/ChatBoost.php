<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a boost applied to a chat
 */
class ChatBoost implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the boost */
        #[SerializedName('id')]
        private string $id,
        /** The number of identical boosts applied */
        #[SerializedName('count')]
        private int $count,
        /** Source of the boost */
        #[SerializedName('source')]
        private ChatBoostSource|null $source = null,
        /** Point in time (Unix timestamp) when the chat was boosted */
        #[SerializedName('start_date')]
        private int $startDate,
        /** Point in time (Unix timestamp) when the boost will expire */
        #[SerializedName('expiration_date')]
        private int $expirationDate,
    ) {
    }

    /**
     * Get Unique identifier of the boost
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the boost
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get The number of identical boosts applied
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Set The number of identical boosts applied
     */
    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get Source of the boost
     */
    public function getSource(): ChatBoostSource|null
    {
        return $this->source;
    }

    /**
     * Set Source of the boost
     */
    public function setSource(ChatBoostSource|null $source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the chat was boosted
     */
    public function getStartDate(): int
    {
        return $this->startDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the chat was boosted
     */
    public function setStartDate(int $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the boost will expire
     */
    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the boost will expire
     */
    public function setExpirationDate(int $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatBoost',
            'id' => $this->getId(),
            'count' => $this->getCount(),
            'source' => $this->getSource(),
            'start_date' => $this->getStartDate(),
            'expiration_date' => $this->getExpirationDate(),
        ];
    }
}
