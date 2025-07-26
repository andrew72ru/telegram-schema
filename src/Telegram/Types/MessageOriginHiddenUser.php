<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The message was originally sent by a user, which is hidden by their privacy settings @sender_name Name of the sender
 */
class MessageOriginHiddenUser extends MessageOrigin implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sender_name')]
        private string $senderName,
    ) {
    }

    public function getSenderName(): string
    {
        return $this->senderName;
    }

    public function setSenderName(string $senderName): self
    {
        $this->senderName = $senderName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageOriginHiddenUser',
            'sender_name' => $this->getSenderName(),
        ];
    }
}
