<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about the next messages of the specified type in the chat split by days. Returns the results in reverse chronological order. Can return partial result for the last returned day. Behavior of this method depends on the value of the option "utc_time_offset".
 */
class GetChatMessageCalendar extends MessageCalendar implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat in which to return information about messages */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Pass topic identifier to get the result only in specific topic; pass null to get the result in all topics; forum topics aren't supported */
        #[SerializedName('topic_id')]
        private MessageTopic|null $topicId = null,
        /** Filter for message content. Filters searchMessagesFilterEmpty, searchMessagesFilterMention, searchMessagesFilterUnreadMention, and searchMessagesFilterUnreadReaction are unsupported in this function */
        #[SerializedName('filter')]
        private SearchMessagesFilter|null $filter = null,
        /** The message identifier from which to return information about messages; use 0 to get results from the last message */
        #[SerializedName('from_message_id')]
        private int $fromMessageId,
    ) {
    }

    /**
     * Get Identifier of the chat in which to return information about messages.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat in which to return information about messages.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Pass topic identifier to get the result only in specific topic; pass null to get the result in all topics; forum topics aren't supported.
     */
    public function getTopicId(): MessageTopic|null
    {
        return $this->topicId;
    }

    /**
     * Set Pass topic identifier to get the result only in specific topic; pass null to get the result in all topics; forum topics aren't supported.
     */
    public function setTopicId(MessageTopic|null $topicId): self
    {
        $this->topicId = $topicId;

        return $this;
    }

    /**
     * Get Filter for message content. Filters searchMessagesFilterEmpty, searchMessagesFilterMention, searchMessagesFilterUnreadMention, and searchMessagesFilterUnreadReaction are unsupported in this function.
     */
    public function getFilter(): SearchMessagesFilter|null
    {
        return $this->filter;
    }

    /**
     * Set Filter for message content. Filters searchMessagesFilterEmpty, searchMessagesFilterMention, searchMessagesFilterUnreadMention, and searchMessagesFilterUnreadReaction are unsupported in this function.
     */
    public function setFilter(SearchMessagesFilter|null $filter): self
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * Get The message identifier from which to return information about messages; use 0 to get results from the last message.
     */
    public function getFromMessageId(): int
    {
        return $this->fromMessageId;
    }

    /**
     * Set The message identifier from which to return information about messages; use 0 to get results from the last message.
     */
    public function setFromMessageId(int $fromMessageId): self
    {
        $this->fromMessageId = $fromMessageId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatMessageCalendar',
            'chat_id' => $this->getChatId(),
            'topic_id' => $this->getTopicId(),
            'filter' => $this->getFilter(),
            'from_message_id' => $this->getFromMessageId(),
        ];
    }
}
