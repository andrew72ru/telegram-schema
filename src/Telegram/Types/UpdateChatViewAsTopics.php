<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A chat default appearance has changed @chat_id Chat identifier @view_as_topics New value of view_as_topics.
 */
class UpdateChatViewAsTopics extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('view_as_topics')]
        private bool $viewAsTopics,
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

    public function getViewAsTopics(): bool
    {
        return $this->viewAsTopics;
    }

    public function setViewAsTopics(bool $viewAsTopics): self
    {
        $this->viewAsTopics = $viewAsTopics;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatViewAsTopics',
            'chat_id' => $this->getChatId(),
            'view_as_topics' => $this->getViewAsTopics(),
        ];
    }
}
