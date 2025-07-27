<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns approximate number of messages of the specified type in the chat or its topic.
 */
class GetChatMessageCount extends Count implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat in which to count messages */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Pass topic identifier to get number of messages only in specific topic; pass null to get number of messages in all topics */
        #[SerializedName('topic_id')]
        private MessageTopic|null $topicId = null,
        /** Filter for message content; searchMessagesFilterEmpty is unsupported in this function */
        #[SerializedName('filter')]
        private SearchMessagesFilter|null $filter = null,
        /** Pass true to get the number of messages without sending network requests, or -1 if the number of messages is unknown locally */
        #[SerializedName('return_local')]
        private bool $returnLocal,
    ) {
    }

    /**
     * Get Identifier of the chat in which to count messages.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat in which to count messages.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Pass topic identifier to get number of messages only in specific topic; pass null to get number of messages in all topics.
     */
    public function getTopicId(): MessageTopic|null
    {
        return $this->topicId;
    }

    /**
     * Set Pass topic identifier to get number of messages only in specific topic; pass null to get number of messages in all topics.
     */
    public function setTopicId(MessageTopic|null $topicId): self
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get Filter for message content; searchMessagesFilterEmpty is unsupported in this function.
     */
    public function getFilter(): SearchMessagesFilter|null
    {
        return $this->filter;
    }

    /**
     * Set Filter for message content; searchMessagesFilterEmpty is unsupported in this function.
     */
    public function setFilter(SearchMessagesFilter|null $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Get Pass true to get the number of messages without sending network requests, or -1 if the number of messages is unknown locally.
     */
    public function getReturnLocal(): bool
    {
        return $this->returnLocal;
    }

    /**
     * Set Pass true to get the number of messages without sending network requests, or -1 if the number of messages is unknown locally.
     */
    public function setReturnLocal(bool $returnLocal): self
    {
        $this->returnLocal = $returnLocal;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatMessageCount',
            'chat_id' => $this->getChatId(),
            'topic_id' => $this->getTopicId(),
            'filter' => $this->getFilter(),
            'return_local' => $this->getReturnLocal(),
        ];
    }
}
