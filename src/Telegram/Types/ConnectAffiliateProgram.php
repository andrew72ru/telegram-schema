<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Connects an affiliate program to the given affiliate. Returns information about the connected affiliate program
 */
class ConnectAffiliateProgram extends ConnectedAffiliateProgram implements \JsonSerializable
{
    public function __construct(
        /** The affiliate to which the affiliate program will be connected */
        #[SerializedName('affiliate')]
        private AffiliateType|null $affiliate = null,
        /** Identifier of the bot, which affiliate program is connected */
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
     * Get Identifier of the bot, which affiliate program is connected
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the bot, which affiliate program is connected
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'connectAffiliateProgram',
            'affiliate' => $this->getAffiliate(),
            'bot_user_id' => $this->getBotUserId(),
        ];
    }
}
