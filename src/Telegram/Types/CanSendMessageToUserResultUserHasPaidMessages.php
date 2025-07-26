<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user can be messaged, but the messages are paid
 */
class CanSendMessageToUserResultUserHasPaidMessages extends CanSendMessageToUserResult implements \JsonSerializable
{
    public function __construct(
        /** Number of Telegram Stars that must be paid by the current user for each sent message to the user */
        #[SerializedName('outgoing_paid_message_star_count')]
        private int $outgoingPaidMessageStarCount,
    ) {
    }

    /**
     * Get Number of Telegram Stars that must be paid by the current user for each sent message to the user
     */
    public function getOutgoingPaidMessageStarCount(): int
    {
        return $this->outgoingPaidMessageStarCount;
    }

    /**
     * Set Number of Telegram Stars that must be paid by the current user for each sent message to the user
     */
    public function setOutgoingPaidMessageStarCount(int $outgoingPaidMessageStarCount): self
    {
        $this->outgoingPaidMessageStarCount = $outgoingPaidMessageStarCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'canSendMessageToUserResultUserHasPaidMessages',
            'outgoing_paid_message_star_count' => $this->getOutgoingPaidMessageStarCount(),
        ];
    }
}
