<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Replaces the current RTMP URL for streaming to the video chat of a chat; requires owner privileges in the chat @chat_id Chat identifier.
 */
class ReplaceVideoChatRtmpUrl extends RtmpUrl implements \JsonSerializable
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
            '@type' => 'replaceVideoChatRtmpUrl',
            'chat_id' => $this->getChatId(),
        ];
    }
}
