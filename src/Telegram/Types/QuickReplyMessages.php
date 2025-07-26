<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of quick reply messages @messages List of quick reply messages; messages may be null
 */
class QuickReplyMessages implements \JsonSerializable
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
            '@type' => 'quickReplyMessages',
            'messages' => $this->getMessages(),
        ];
    }
}
