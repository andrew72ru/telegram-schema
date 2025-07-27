<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A price for paid messages was changed in the supergroup chat @paid_message_star_count The new number of Telegram Stars that must be paid by non-administrator users of the supergroup chat for each sent message.
 */
class MessagePaidMessagePriceChanged extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('paid_message_star_count')]
        private int $paidMessageStarCount,
    ) {
    }

    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    public function setPaidMessageStarCount(int $paidMessageStarCount): self
    {
        $this->paidMessageStarCount = $paidMessageStarCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messagePaidMessagePriceChanged',
            'paid_message_star_count' => $this->getPaidMessageStarCount(),
        ];
    }
}
