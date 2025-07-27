<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The sign_messages setting of a channel was toggled @sign_messages New value of sign_messages.
 */
class ChatEventSignMessagesToggled extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sign_messages')]
        private bool $signMessages,
    ) {
    }

    public function getSignMessages(): bool
    {
        return $this->signMessages;
    }

    public function setSignMessages(bool $signMessages): self
    {
        $this->signMessages = $signMessages;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventSignMessagesToggled',
            'sign_messages' => $this->getSignMessages(),
        ];
    }
}
