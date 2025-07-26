<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents an inline message that can be sent via the bot
 */
class PreparedInlineMessageId implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier for the message */
        #[SerializedName('id')]
        private string $id,
        /** Point in time (Unix timestamp) when the message can't be used anymore */
        #[SerializedName('expiration_date')]
        private int $expirationDate,
    ) {
    }

    /**
     * Get Unique identifier for the message
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Unique identifier for the message
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the message can't be used anymore
     */
    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the message can't be used anymore
     */
    public function setExpirationDate(int $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'preparedInlineMessageId',
            'id' => $this->getId(),
            'expiration_date' => $this->getExpirationDate(),
        ];
    }
}
