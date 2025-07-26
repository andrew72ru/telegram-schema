<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user can't participate in the giveaway, because they have already been member of the chat
 */
class GiveawayParticipantStatusAlreadyWasMember extends GiveawayParticipantStatus implements \JsonSerializable
{
    public function __construct(
        /** Point in time (Unix timestamp) when the user joined the chat */
        #[SerializedName('joined_chat_date')]
        private int $joinedChatDate,
    ) {
    }

    /**
     * Get Point in time (Unix timestamp) when the user joined the chat
     */
    public function getJoinedChatDate(): int
    {
        return $this->joinedChatDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the user joined the chat
     */
    public function setJoinedChatDate(int $joinedChatDate): self
    {
        $this->joinedChatDate = $joinedChatDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'giveawayParticipantStatusAlreadyWasMember',
            'joined_chat_date' => $this->getJoinedChatDate(),
        ];
    }
}
