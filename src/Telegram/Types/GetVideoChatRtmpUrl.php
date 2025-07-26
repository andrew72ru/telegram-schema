<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns RTMP URL for streaming to the video chat of a chat; requires can_manage_video_chats administrator right @chat_id Chat identifier
 */
class GetVideoChatRtmpUrl extends RtmpUrl implements \JsonSerializable
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
            '@type' => 'getVideoChatRtmpUrl',
            'chat_id' => $this->getChatId(),
        ];
    }
}
