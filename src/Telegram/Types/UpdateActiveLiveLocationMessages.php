<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of messages with active live location that need to be updated by the application has changed. The list is persistent across application restarts only if the message database is used.
 */
class UpdateActiveLiveLocationMessages extends Update implements \JsonSerializable
{
    public function __construct(
        /** The list of messages with active live locations */
        #[SerializedName('messages')]
        private array|null $messages = null,
    ) {
    }

    /**
     * Get The list of messages with active live locations.
     */
    public function getMessages(): array|null
    {
        return $this->messages;
    }

    /**
     * Set The list of messages with active live locations.
     */
    public function setMessages(array|null $messages): self
    {
        $this->messages = $messages;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateActiveLiveLocationMessages',
            'messages' => $this->getMessages(),
        ];
    }
}
