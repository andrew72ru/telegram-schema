<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The message was originally sent by a known user @sender_user_id Identifier of the user that originally sent the message
 */
class MessageOriginUser extends MessageOrigin implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('sender_user_id')]
        private int $senderUserId,
    ) {
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function setSenderUserId(int $senderUserId): self
    {
        $this->senderUserId = $senderUserId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageOriginUser',
            'sender_user_id' => $this->getSenderUserId(),
        ];
    }
}
