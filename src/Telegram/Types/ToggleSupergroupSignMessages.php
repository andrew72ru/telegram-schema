<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether sender signature or link to the account is added to sent messages in a channel; requires can_change_info member right.
 */
class ToggleSupergroupSignMessages extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the channel */
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        /** New value of sign_messages */
        #[SerializedName('sign_messages')]
        private bool $signMessages,
        /** New value of show_message_sender */
        #[SerializedName('show_message_sender')]
        private bool $showMessageSender,
    ) {
    }

    /**
     * Get Identifier of the channel.
     */
    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    /**
     * Set Identifier of the channel.
     */
    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    /**
     * Get New value of sign_messages.
     */
    public function getSignMessages(): bool
    {
        return $this->signMessages;
    }

    /**
     * Set New value of sign_messages.
     */
    public function setSignMessages(bool $signMessages): self
    {
        $this->signMessages = $signMessages;

        return $this;
    }

    /**
     * Get New value of show_message_sender.
     */
    public function getShowMessageSender(): bool
    {
        return $this->showMessageSender;
    }

    /**
     * Set New value of show_message_sender.
     */
    public function setShowMessageSender(bool $showMessageSender): self
    {
        $this->showMessageSender = $showMessageSender;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleSupergroupSignMessages',
            'supergroup_id' => $this->getSupergroupId(),
            'sign_messages' => $this->getSignMessages(),
            'show_message_sender' => $this->getShowMessageSender(),
        ];
    }
}
