<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A forum topic was edited @old_topic_info Old information about the topic @new_topic_info New information about the topic
 */
class ChatEventForumTopicEdited extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('old_topic_info')]
        private ForumTopicInfo|null $oldTopicInfo = null,
        #[SerializedName('new_topic_info')]
        private ForumTopicInfo|null $newTopicInfo = null,
    ) {
    }

    public function getOldTopicInfo(): ForumTopicInfo|null
    {
        return $this->oldTopicInfo;
    }

    public function setOldTopicInfo(ForumTopicInfo|null $oldTopicInfo): self
    {
        $this->oldTopicInfo = $oldTopicInfo;

        return $this;
    }

    public function getNewTopicInfo(): ForumTopicInfo|null
    {
        return $this->newTopicInfo;
    }

    public function setNewTopicInfo(ForumTopicInfo|null $newTopicInfo): self
    {
        $this->newTopicInfo = $newTopicInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventForumTopicEdited',
            'old_topic_info' => $this->getOldTopicInfo(),
            'new_topic_info' => $this->getNewTopicInfo(),
        ];
    }
}
