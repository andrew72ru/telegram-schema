<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains privacy settings for chats with non-contacts.
 */
class NewChatPrivacySettings implements \JsonSerializable
{
    public function __construct(
        /** True, if non-contacts users are able to write first to the current user. Telegram Premium subscribers are able to write first regardless of this setting */
        #[SerializedName('allow_new_chats_from_unknown_users')]
        private bool $allowNewChatsFromUnknownUsers,
        /** Number of Telegram Stars that must be paid for every incoming private message by non-contacts; 0-getOption("paid_message_star_count_max"). */
        #[SerializedName('incoming_paid_message_star_count')]
        private int $incomingPaidMessageStarCount,
    ) {
    }

    /**
     * Get True, if non-contacts users are able to write first to the current user. Telegram Premium subscribers are able to write first regardless of this setting.
     */
    public function getAllowNewChatsFromUnknownUsers(): bool
    {
        return $this->allowNewChatsFromUnknownUsers;
    }

    /**
     * Set True, if non-contacts users are able to write first to the current user. Telegram Premium subscribers are able to write first regardless of this setting.
     */
    public function setAllowNewChatsFromUnknownUsers(bool $allowNewChatsFromUnknownUsers): self
    {
        $this->allowNewChatsFromUnknownUsers = $allowNewChatsFromUnknownUsers;

        return $this;
    }

    /**
     * Get Number of Telegram Stars that must be paid for every incoming private message by non-contacts; 0-getOption("paid_message_star_count_max")..
     */
    public function getIncomingPaidMessageStarCount(): int
    {
        return $this->incomingPaidMessageStarCount;
    }

    /**
     * Set Number of Telegram Stars that must be paid for every incoming private message by non-contacts; 0-getOption("paid_message_star_count_max")..
     */
    public function setIncomingPaidMessageStarCount(int $incomingPaidMessageStarCount): self
    {
        $this->incomingPaidMessageStarCount = $incomingPaidMessageStarCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'newChatPrivacySettings',
            'allow_new_chats_from_unknown_users' => $this->getAllowNewChatsFromUnknownUsers(),
            'incoming_paid_message_star_count' => $this->getIncomingPaidMessageStarCount(),
        ];
    }
}
