<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A price for direct messages was changed in the channel chat.
 */
class MessageDirectMessagePriceChanged extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** True, if direct messages group was enabled for the channel; false otherwise */
        #[SerializedName('is_enabled')]
        private bool $isEnabled,
        /** The new number of Telegram Stars that must be paid by non-administrator users of the channel chat for each message sent to the direct messages group; */
        #[SerializedName('paid_message_star_count')]
        private int $paidMessageStarCount,
    ) {
    }

    /**
     * Get True, if direct messages group was enabled for the channel; false otherwise.
     */
    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    /**
     * Set True, if direct messages group was enabled for the channel; false otherwise.
     */
    public function setIsEnabled(bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get The new number of Telegram Stars that must be paid by non-administrator users of the channel chat for each message sent to the direct messages group;.
     */
    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    /**
     * Set The new number of Telegram Stars that must be paid by non-administrator users of the channel chat for each message sent to the direct messages group;.
     */
    public function setPaidMessageStarCount(int $paidMessageStarCount): self
    {
        $this->paidMessageStarCount = $paidMessageStarCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageDirectMessagePriceChanged',
            'is_enabled' => $this->getIsEnabled(),
            'paid_message_star_count' => $this->getPaidMessageStarCount(),
        ];
    }
}
