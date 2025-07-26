<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user or the chat was banned (and hence is not a member of the chat). Implies the user can't return to the chat, view messages, or be used as a participant identifier to join a video chat of the chat
 */
class ChatMemberStatusBanned extends ChatMemberStatus implements \JsonSerializable
{
    public function __construct(
        /** Point in time (Unix timestamp) when the user will be unbanned; 0 if never. If the user is banned for more than 366 days or for less than 30 seconds from the current time, the user is considered to be banned forever. Always 0 in basic groups */
        #[SerializedName('banned_until_date')]
        private int $bannedUntilDate,
    ) {
    }

    /**
     * Get Point in time (Unix timestamp) when the user will be unbanned; 0 if never. If the user is banned for more than 366 days or for less than 30 seconds from the current time, the user is considered to be banned forever. Always 0 in basic groups
     */
    public function getBannedUntilDate(): int
    {
        return $this->bannedUntilDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the user will be unbanned; 0 if never. If the user is banned for more than 366 days or for less than 30 seconds from the current time, the user is considered to be banned forever. Always 0 in basic groups
     */
    public function setBannedUntilDate(int $bannedUntilDate): self
    {
        $this->bannedUntilDate = $bannedUntilDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatMemberStatusBanned',
            'banned_until_date' => $this->getBannedUntilDate(),
        ];
    }
}
