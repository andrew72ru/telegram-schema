<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about an affiliate that received commission from a Telegram Star transaction
 */
class AffiliateInfo implements \JsonSerializable
{
    public function __construct(
        /** The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the program owner */
        #[SerializedName('commission_per_mille')]
        private int $commissionPerMille,
        /** Identifier of the chat which received the commission */
        #[SerializedName('affiliate_chat_id')]
        private int $affiliateChatId,
        /** The amount of Telegram Stars that were received by the affiliate; can be negative for refunds */
        #[SerializedName('star_amount')]
        private StarAmount|null $starAmount = null,
    ) {
    }

    /**
     * Get The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the program owner
     */
    public function getCommissionPerMille(): int
    {
        return $this->commissionPerMille;
    }

    /**
     * Set The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the program owner
     */
    public function setCommissionPerMille(int $commissionPerMille): self
    {
        $this->commissionPerMille = $commissionPerMille;

        return $this;
    }

    /**
     * Get Identifier of the chat which received the commission
     */
    public function getAffiliateChatId(): int
    {
        return $this->affiliateChatId;
    }

    /**
     * Set Identifier of the chat which received the commission
     */
    public function setAffiliateChatId(int $affiliateChatId): self
    {
        $this->affiliateChatId = $affiliateChatId;

        return $this;
    }

    /**
     * Get The amount of Telegram Stars that were received by the affiliate; can be negative for refunds
     */
    public function getStarAmount(): StarAmount|null
    {
        return $this->starAmount;
    }

    /**
     * Set The amount of Telegram Stars that were received by the affiliate; can be negative for refunds
     */
    public function setStarAmount(StarAmount|null $starAmount): self
    {
        $this->starAmount = $starAmount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'affiliateInfo',
            'commission_per_mille' => $this->getCommissionPerMille(),
            'affiliate_chat_id' => $this->getAffiliateChatId(),
            'star_amount' => $this->getStarAmount(),
        ];
    }
}
