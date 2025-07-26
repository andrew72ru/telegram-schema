<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A topic in a channel direct messages chat administered by the current user @direct_messages_chat_topic_id Unique identifier of the topic
 */
class MessageTopicDirectMessages extends MessageTopic implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('direct_messages_chat_topic_id')]
        private int $directMessagesChatTopicId,
    ) {
    }

    public function getDirectMessagesChatTopicId(): int
    {
        return $this->directMessagesChatTopicId;
    }

    public function setDirectMessagesChatTopicId(int $directMessagesChatTopicId): self
    {
        $this->directMessagesChatTopicId = $directMessagesChatTopicId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageTopicDirectMessages',
            'direct_messages_chat_topic_id' => $this->getDirectMessagesChatTopicId(),
        ];
    }
}
