<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns sparse positions of messages of the specified type in the chat to be used for shared media scroll implementation. Returns the results in reverse chronological order (i.e., in order of decreasing message_id).
 */
class GetChatSparseMessagePositions extends MessagePositions implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat in which to return information about message positions */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Filter for message content. Filters searchMessagesFilterEmpty, searchMessagesFilterMention, searchMessagesFilterUnreadMention, and searchMessagesFilterUnreadReaction are unsupported in this function */
        #[SerializedName('filter')]
        private SearchMessagesFilter|null $filter = null,
        /** The message identifier from which to return information about message positions */
        #[SerializedName('from_message_id')]
        private int $fromMessageId,
        /** The expected number of message positions to be returned; 50-2000. A smaller number of positions can be returned, if there are not enough appropriate messages */
        #[SerializedName('limit')]
        private int $limit,
        /** If not 0, only messages in the specified Saved Messages topic will be considered; pass 0 to consider all messages, or for chats other than Saved Messages */
        #[SerializedName('saved_messages_topic_id')]
        private int $savedMessagesTopicId,
    ) {
    }

    /**
     * Get Identifier of the chat in which to return information about message positions
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat in which to return information about message positions
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Filter for message content. Filters searchMessagesFilterEmpty, searchMessagesFilterMention, searchMessagesFilterUnreadMention, and searchMessagesFilterUnreadReaction are unsupported in this function
     */
    public function getFilter(): SearchMessagesFilter|null
    {
        return $this->filter;
    }

    /**
     * Set Filter for message content. Filters searchMessagesFilterEmpty, searchMessagesFilterMention, searchMessagesFilterUnreadMention, and searchMessagesFilterUnreadReaction are unsupported in this function
     */
    public function setFilter(SearchMessagesFilter|null $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Get The message identifier from which to return information about message positions
     */
    public function getFromMessageId(): int
    {
        return $this->fromMessageId;
    }

    /**
     * Set The message identifier from which to return information about message positions
     */
    public function setFromMessageId(int $fromMessageId): self
    {
        $this->fromMessageId = $fromMessageId;

        return $this;
    }

    /**
     * Get The expected number of message positions to be returned; 50-2000. A smaller number of positions can be returned, if there are not enough appropriate messages
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The expected number of message positions to be returned; 50-2000. A smaller number of positions can be returned, if there are not enough appropriate messages
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Get If not 0, only messages in the specified Saved Messages topic will be considered; pass 0 to consider all messages, or for chats other than Saved Messages
     */
    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    /**
     * Set If not 0, only messages in the specified Saved Messages topic will be considered; pass 0 to consider all messages, or for chats other than Saved Messages
     */
    public function setSavedMessagesTopicId(int $savedMessagesTopicId): self
    {
        $this->savedMessagesTopicId = $savedMessagesTopicId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatSparseMessagePositions',
            'chat_id' => $this->getChatId(),
            'filter' => $this->getFilter(),
            'from_message_id' => $this->getFromMessageId(),
            'limit' => $this->getLimit(),
            'saved_messages_topic_id' => $this->getSavedMessagesTopicId(),
        ];
    }
}
