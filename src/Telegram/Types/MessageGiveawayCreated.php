<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A giveaway was created for the chat. Use telegramPaymentPurposePremiumGiveaway, storePaymentPurposePremiumGiveaway, telegramPaymentPurposeStarGiveaway, or storePaymentPurposeStarGiveaway to create a giveaway
 */
class MessageGiveawayCreated extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** Number of Telegram Stars that will be shared by winners of the giveaway; 0 for Telegram Premium giveaways */
        #[SerializedName('star_count')]
        private int $starCount,
    ) {
    }

    /**
     * Get Number of Telegram Stars that will be shared by winners of the giveaway; 0 for Telegram Premium giveaways
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set Number of Telegram Stars that will be shared by winners of the giveaway; 0 for Telegram Premium giveaways
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageGiveawayCreated',
            'star_count' => $this->getStarCount(),
        ];
    }
}
