<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The current user shared a chat, which was requested by the bot @chat The shared chat @button_id Identifier of the keyboard button with the request
 */
class MessageChatShared extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat')]
        private SharedChat|null $chat = null,
        #[SerializedName('button_id')]
        private int $buttonId,
    ) {
    }

    public function getChat(): SharedChat|null
    {
        return $this->chat;
    }

    public function setChat(SharedChat|null $chat): self
    {
        $this->chat = $chat;

        return $this;
    }

    public function getButtonId(): int
    {
        return $this->buttonId;
    }

    public function setButtonId(int $buttonId): self
    {
        $this->buttonId = $buttonId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageChatShared',
            'chat' => $this->getChat(),
            'button_id' => $this->getButtonId(),
        ];
    }
}
