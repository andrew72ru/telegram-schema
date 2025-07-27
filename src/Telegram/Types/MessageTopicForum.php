<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A topic in a forum supergroup chat @forum_topic_id Unique identifier of the forum topic; all messages in a non-forum supergroup chats belongs to the General topic.
 */
class MessageTopicForum extends MessageTopic implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('forum_topic_id')]
        private int $forumTopicId,
    ) {
    }

    public function getForumTopicId(): int
    {
        return $this->forumTopicId;
    }

    public function setForumTopicId(int $forumTopicId): self
    {
        $this->forumTopicId = $forumTopicId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageTopicForum',
            'forum_topic_id' => $this->getForumTopicId(),
        ];
    }
}
