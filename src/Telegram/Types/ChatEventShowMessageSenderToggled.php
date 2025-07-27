<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The show_message_sender setting of a channel was toggled @show_message_sender New value of show_message_sender.
 */
class ChatEventShowMessageSenderToggled extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('show_message_sender')]
        private bool $showMessageSender,
    ) {
    }

    public function getShowMessageSender(): bool
    {
        return $this->showMessageSender;
    }

    public function setShowMessageSender(bool $showMessageSender): self
    {
        $this->showMessageSender = $showMessageSender;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventShowMessageSenderToggled',
            'show_message_sender' => $this->getShowMessageSender(),
        ];
    }
}
