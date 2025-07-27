<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The General forum topic was hidden or unhidden @topic_info New information about the topic.
 */
class ChatEventForumTopicToggleIsHidden extends ChatEventAction implements \JsonSerializable
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
            '@type' => 'chatEventForumTopicToggleIsHidden',
            'topic_info' => $this->getTopicInfo(),
        ];
    }
}
