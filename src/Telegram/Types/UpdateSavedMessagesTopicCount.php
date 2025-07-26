<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Number of Saved Messages topics has changed @topic_count Approximate total number of Saved Messages topics
 */
class UpdateSavedMessagesTopicCount extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('topic_count')]
        private int $topicCount,
    ) {
    }

    public function getTopicCount(): int
    {
        return $this->topicCount;
    }

    public function setTopicCount(int $topicCount): self
    {
        $this->topicCount = $topicCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateSavedMessagesTopicCount',
            'topic_count' => $this->getTopicCount(),
        ];
    }
}
