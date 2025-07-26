<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a message sender, which can be used to send messages in a chat @sender The message sender @needs_premium True, if Telegram Premium is needed to use the message sender
 */
class ChatMessageSender implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sender')]
        private MessageSender|null $sender = null,
        #[SerializedName('needs_premium')]
        private bool $needsPremium,
    ) {
    }

    public function getSender(): MessageSender|null
    {
        return $this->sender;
    }

    public function setSender(MessageSender|null $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getNeedsPremium(): bool
    {
        return $this->needsPremium;
    }

    public function setNeedsPremium(bool $needsPremium): self
    {
        $this->needsPremium = $needsPremium;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatMessageSender',
            'sender' => $this->getSender(),
            'needs_premium' => $this->getNeedsPremium(),
        ];
    }
}
