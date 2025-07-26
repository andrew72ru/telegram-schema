<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Basic information about a topic in a channel direct messages chat administered by the current user has changed. This update is guaranteed to come before the topic identifier is returned to the application
 */
class UpdateDirectMessagesChatTopic extends Update implements \JsonSerializable
{
    public function __construct(
        /** New data about the topic */
        #[SerializedName('topic')]
        private DirectMessagesChatTopic|null $topic = null,
    ) {
    }

    /**
     * Get New data about the topic
     */
    public function getTopic(): DirectMessagesChatTopic|null
    {
        return $this->topic;
    }

    /**
     * Set New data about the topic
     */
    public function setTopic(DirectMessagesChatTopic|null $topic): self
    {
        $this->topic = $topic;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateDirectMessagesChatTopic',
            'topic' => $this->getTopic(),
        ];
    }
}
