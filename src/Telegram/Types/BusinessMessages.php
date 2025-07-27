<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of messages from a business account as received by a bot @messages List of business messages.
 */
class BusinessMessages implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('messages')]
        private array|null $messages = null,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessMessages',
            'messages' => $this->getMessages(),
        ];
    }
}
