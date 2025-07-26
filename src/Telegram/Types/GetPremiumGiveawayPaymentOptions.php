<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns available options for creating of Telegram Premium giveaway or manual distribution of Telegram Premium among chat members
 */
class GetPremiumGiveawayPaymentOptions extends PremiumGiveawayPaymentOptions implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the supergroup or channel chat, which will be automatically boosted by receivers of the gift codes and which is administered by the user */
        #[SerializedName('boosted_chat_id')]
        private int $boostedChatId,
    ) {
    }

    /**
     * Get Identifier of the supergroup or channel chat, which will be automatically boosted by receivers of the gift codes and which is administered by the user
     */
    public function getBoostedChatId(): int
    {
        return $this->boostedChatId;
    }

    /**
     * Set Identifier of the supergroup or channel chat, which will be automatically boosted by receivers of the gift codes and which is administered by the user
     */
    public function setBoostedChatId(int $boostedChatId): self
    {
        $this->boostedChatId = $boostedChatId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getPremiumGiveawayPaymentOptions',
            'boosted_chat_id' => $this->getBoostedChatId(),
        ];
    }
}
