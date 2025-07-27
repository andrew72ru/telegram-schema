<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a user that has failed to be added to a chat.
 */
class FailedToAddMember implements \JsonSerializable
{
    public function __construct(
        /** User identifier */
        #[SerializedName('user_id')]
        private int $userId,
        /** True, if subscription to Telegram Premium would have allowed to add the user to the chat */
        #[SerializedName('premium_would_allow_invite')]
        private bool $premiumWouldAllowInvite,
        /** True, if subscription to Telegram Premium is required to send the user chat invite link */
        #[SerializedName('premium_required_to_send_messages')]
        private bool $premiumRequiredToSendMessages,
    ) {
    }

    /**
     * Get User identifier.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set User identifier.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get True, if subscription to Telegram Premium would have allowed to add the user to the chat.
     */
    public function getPremiumWouldAllowInvite(): bool
    {
        return $this->premiumWouldAllowInvite;
    }

    /**
     * Set True, if subscription to Telegram Premium would have allowed to add the user to the chat.
     */
    public function setPremiumWouldAllowInvite(bool $premiumWouldAllowInvite): self
    {
        $this->premiumWouldAllowInvite = $premiumWouldAllowInvite;

        return $this;
    }

    /**
     * Get True, if subscription to Telegram Premium is required to send the user chat invite link.
     */
    public function getPremiumRequiredToSendMessages(): bool
    {
        return $this->premiumRequiredToSendMessages;
    }

    /**
     * Set True, if subscription to Telegram Premium is required to send the user chat invite link.
     */
    public function setPremiumRequiredToSendMessages(bool $premiumRequiredToSendMessages): self
    {
        $this->premiumRequiredToSendMessages = $premiumRequiredToSendMessages;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'failedToAddMember',
            'user_id' => $this->getUserId(),
            'premium_would_allow_invite' => $this->getPremiumWouldAllowInvite(),
            'premium_required_to_send_messages' => $this->getPremiumRequiredToSendMessages(),
        ];
    }
}
