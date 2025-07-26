<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an affiliate program that were connected to the given affiliate by identifier of the bot that created the program
 */
class GetConnectedAffiliateProgram extends ConnectedAffiliateProgram implements \JsonSerializable
{
    public function __construct(
        /** The affiliate to which the affiliate program will be connected */
        #[SerializedName('affiliate')]
        private AffiliateType|null $affiliate = null,
        /** Identifier of the bot that created the program */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
    ) {
    }

    /**
     * Get The affiliate to which the affiliate program will be connected
     */
    public function getAffiliate(): AffiliateType|null
    {
        return $this->affiliate;
    }

    /**
     * Set The affiliate to which the affiliate program will be connected
     */
    public function setAffiliate(AffiliateType|null $affiliate): self
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * Get Identifier of the bot that created the program
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the bot that created the program
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getConnectedAffiliateProgram',
            'affiliate' => $this->getAffiliate(),
            'bot_user_id' => $this->getBotUserId(),
        ];
    }
}
