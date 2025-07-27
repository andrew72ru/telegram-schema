<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A forum topic was deleted @topic_info Information about the topic.
 */
class ChatEventForumTopicDeleted extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('topic_info')]
        private ForumTopicInfo|null $topicInfo = null,
    ) {
    }

    public function getTopicInfo(): ForumTopicInfo|null
    {
        return $this->topicInfo;
    }

    public function setTopicInfo(ForumTopicInfo|null $topicInfo): self
    {
        $this->topicInfo = $topicInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventForumTopicDeleted',
            'topic_info' => $this->getTopicInfo(),
        ];
    }
}
