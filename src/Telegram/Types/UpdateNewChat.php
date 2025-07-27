<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new chat has been loaded/created. This update is guaranteed to come before the chat identifier is returned to the application. The chat field changes will be reported through separate updates @chat The chat.
 */
class UpdateNewChat extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat')]
        private Chat|null $chat = null,
    ) {
    }

    public function getChat(): Chat|null
    {
        return $this->chat;
    }

    public function setChat(Chat|null $chat): self
    {
        $this->chat = $chat;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateNewChat',
            'chat' => $this->getChat(),
        ];
    }
}
