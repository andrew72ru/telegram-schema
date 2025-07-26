<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user is a member of the chat, without any additional privileges or restrictions
 */
class ChatMemberStatusMember extends ChatMemberStatus implements \JsonSerializable
{
    public function __construct(
        /** Point in time (Unix timestamp) when the user will be removed from the chat because of the expired subscription; 0 if never. Ignored in setChatMemberStatus */
        #[SerializedName('member_until_date')]
        private int $memberUntilDate,
    ) {
    }

    /**
     * Get Point in time (Unix timestamp) when the user will be removed from the chat because of the expired subscription; 0 if never. Ignored in setChatMemberStatus
     */
    public function getMemberUntilDate(): int
    {
        return $this->memberUntilDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the user will be removed from the chat because of the expired subscription; 0 if never. Ignored in setChatMemberStatus
     */
    public function setMemberUntilDate(int $memberUntilDate): self
    {
        $this->memberUntilDate = $memberUntilDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatMemberStatusMember',
            'member_until_date' => $this->getMemberUntilDate(),
        ];
    }
}
