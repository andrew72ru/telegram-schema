<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Paid messages were refunded @message_count The number of refunded messages @star_count The number of refunded Telegram Stars.
 */
class MessagePaidMessagesRefunded extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('message_count')]
        private int $messageCount,
        #[SerializedName('star_count')]
        private int $starCount,
    ) {
    }

    public function getMessageCount(): int
    {
        return $this->messageCount;
    }

    public function setMessageCount(int $messageCount): self
    {
        $this->messageCount = $messageCount;

        return $this;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messagePaidMessagesRefunded',
            'message_count' => $this->getMessageCount(),
            'star_count' => $this->getStarCount(),
        ];
    }
}
