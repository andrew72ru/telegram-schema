<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A forum topic has been closed or opened @is_closed True, if the topic was closed; otherwise, the topic was reopened.
 */
class MessageForumTopicIsClosedToggled extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('is_closed')]
        private bool $isClosed,
    ) {
    }

    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }

    public function setIsClosed(bool $isClosed): self
    {
        $this->isClosed = $isClosed;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageForumTopicIsClosedToggled',
            'is_closed' => $this->getIsClosed(),
        ];
    }
}
