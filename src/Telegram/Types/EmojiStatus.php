<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an emoji to be shown instead of the Telegram Premium badge
 */
class EmojiStatus implements \JsonSerializable
{
    public function __construct(
        /** Type of the emoji status */
        #[SerializedName('type')]
        private EmojiStatusType|null $type = null,
        /** Point in time (Unix timestamp) when the status will expire; 0 if never */
        #[SerializedName('expiration_date')]
        private int $expirationDate,
    ) {
    }

    /**
     * Get Type of the emoji status
     */
    public function getType(): EmojiStatusType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the emoji status
     */
    public function setType(EmojiStatusType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the status will expire; 0 if never
     */
    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the status will expire; 0 if never
     */
    public function setExpirationDate(int $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emojiStatus',
            'type' => $this->getType(),
            'expiration_date' => $this->getExpirationDate(),
        ];
    }
}
