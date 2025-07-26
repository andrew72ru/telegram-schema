<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns approximate 1-based position of a message among messages, which can be found by the specified filter in the chat and topic. Cannot be used in secret chats
 */
class GetChatMessagePosition extends Count implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat in which to find message position */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Pass topic identifier to get position among messages only in specific topic; pass null to get position among all chat messages */
        #[SerializedName('topic_id')]
        private MessageTopic|null $topicId = null,
        /** Filter for message content; searchMessagesFilterEmpty, searchMessagesFilterUnreadMention, searchMessagesFilterUnreadReaction, and searchMessagesFilterFailedToSend are unsupported in this function */
        #[SerializedName('filter')]
        private SearchMessagesFilter|null $filter = null,
        /** Message identifier */
        #[SerializedName('message_id')]
        private int $messageId,
    ) {
    }

    /**
     * Get Identifier of the chat in which to find message position
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat in which to find message position
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Pass topic identifier to get position among messages only in specific topic; pass null to get position among all chat messages
     */
    public function getTopicId(): MessageTopic|null
    {
        return $this->topicId;
    }

    /**
     * Set Pass topic identifier to get position among messages only in specific topic; pass null to get position among all chat messages
     */
    public function setTopicId(MessageTopic|null $topicId): self
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get Filter for message content; searchMessagesFilterEmpty, searchMessagesFilterUnreadMention, searchMessagesFilterUnreadReaction, and searchMessagesFilterFailedToSend are unsupported in this function
     */
    public function getFilter(): SearchMessagesFilter|null
    {
        return $this->filter;
    }

    /**
     * Set Filter for message content; searchMessagesFilterEmpty, searchMessagesFilterUnreadMention, searchMessagesFilterUnreadReaction, and searchMessagesFilterFailedToSend are unsupported in this function
     */
    public function setFilter(SearchMessagesFilter|null $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Get Message identifier
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Message identifier
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatMessagePosition',
            'chat_id' => $this->getChatId(),
            'topic_id' => $this->getTopicId(),
            'filter' => $this->getFilter(),
            'message_id' => $this->getMessageId(),
        ];
    }
}
