<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of sponsored messages @messages List of sponsored messages @messages_between The minimum number of messages between shown sponsored messages, or 0 if only one sponsored message must be shown after all ordinary messages
 */
class SponsoredMessages implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('messages')]
        private array|null $messages = null,
        #[SerializedName('messages_between')]
        private int $messagesBetween,
    ) {
    }

    public function getMessages(): array|null
    {
        return $this->messages;
    }

    public function setMessages(array|null $messages): self
    {
        $this->messages = $messages;

        return $this;
    }

    public function getMessagesBetween(): int
    {
        return $this->messagesBetween;
    }

    public function setMessagesBetween(int $messagesBetween): self
    {
        $this->messagesBetween = $messagesBetween;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sponsoredMessages',
            'messages' => $this->getMessages(),
            'messages_between' => $this->getMessagesBetween(),
        ];
    }
}
