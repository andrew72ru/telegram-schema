<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes default participant identifier, on whose behalf a video chat in the chat will be joined @chat_id Chat identifier @default_participant_id Default group call participant identifier to join the video chats
 */
class SetVideoChatDefaultParticipant extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('default_participant_id')]
        private MessageSender|null $defaultParticipantId = null,
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

    public function getDefaultParticipantId(): MessageSender|null
    {
        return $this->defaultParticipantId;
    }

    public function setDefaultParticipantId(MessageSender|null $defaultParticipantId): self
    {
        $this->defaultParticipantId = $defaultParticipantId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setVideoChatDefaultParticipant',
            'chat_id' => $this->getChatId(),
            'default_participant_id' => $this->getDefaultParticipantId(),
        ];
    }
}
