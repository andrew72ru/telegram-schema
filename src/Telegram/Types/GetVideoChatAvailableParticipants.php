<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of participant identifiers, on whose behalf a video chat in the chat can be joined @chat_id Chat identifier
 */
class GetVideoChatAvailableParticipants extends MessageSenders implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getVideoChatAvailableParticipants',
            'chat_id' => $this->getChatId(),
        ];
    }
}
