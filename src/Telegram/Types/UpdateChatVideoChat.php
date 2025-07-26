<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat video chat state has changed @chat_id Chat identifier @video_chat New value of video_chat
 */
class UpdateChatVideoChat extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('video_chat')]
        private VideoChat|null $videoChat = null,
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

    public function getVideoChat(): VideoChat|null
    {
        return $this->videoChat;
    }

    public function setVideoChat(VideoChat|null $videoChat): self
    {
        $this->videoChat = $videoChat;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatVideoChat',
            'chat_id' => $this->getChatId(),
            'video_chat' => $this->getVideoChat(),
        ];
    }
}
