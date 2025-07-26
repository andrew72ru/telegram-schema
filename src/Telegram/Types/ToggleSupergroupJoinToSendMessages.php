<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether joining is mandatory to send messages to a discussion supergroup; requires can_restrict_members administrator right
 */
class ToggleSupergroupJoinToSendMessages extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the supergroup that isn't a broadcast group */
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        /** New value of join_to_send_messages */
        #[SerializedName('join_to_send_messages')]
        private bool $joinToSendMessages,
    ) {
    }

    /**
     * Get Identifier of the supergroup that isn't a broadcast group
     */
    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    /**
     * Set Identifier of the supergroup that isn't a broadcast group
     */
    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    /**
     * Get New value of join_to_send_messages
     */
    public function getJoinToSendMessages(): bool
    {
        return $this->joinToSendMessages;
    }

    /**
     * Set New value of join_to_send_messages
     */
    public function setJoinToSendMessages(bool $joinToSendMessages): self
    {
        $this->joinToSendMessages = $joinToSendMessages;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleSupergroupJoinToSendMessages',
            'supergroup_id' => $this->getSupergroupId(),
            'join_to_send_messages' => $this->getJoinToSendMessages(),
        ];
    }
}
