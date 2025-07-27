<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat action bar was changed @chat_id Chat identifier @action_bar The new value of the action bar; may be null.
 */
class UpdateChatActionBar extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('action_bar')]
        private ChatActionBar|null $actionBar = null,
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

    public function getActionBar(): ChatActionBar|null
    {
        return $this->actionBar;
    }

    public function setActionBar(ChatActionBar|null $actionBar): self
    {
        $this->actionBar = $actionBar;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatActionBar',
            'chat_id' => $this->getChatId(),
            'action_bar' => $this->getActionBar(),
        ];
    }
}
