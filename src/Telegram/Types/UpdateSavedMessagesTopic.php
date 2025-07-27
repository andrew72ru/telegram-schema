<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Basic information about a Saved Messages topic has changed. This update is guaranteed to come before the topic identifier is returned to the application.
 */
class UpdateSavedMessagesTopic extends Update implements \JsonSerializable
{
    public function __construct(
        /** New data about the topic */
        #[SerializedName('topic')]
        private SavedMessagesTopic|null $topic = null,
    ) {
    }

    /**
     * Get New data about the topic.
     */
    public function getTopic(): SavedMessagesTopic|null
    {
        return $this->topic;
    }

    /**
     * Set New data about the topic.
     */
    public function setTopic(SavedMessagesTopic|null $topic): self
    {
        $this->topic = $topic;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateSavedMessagesTopic',
            'topic' => $this->getTopic(),
        ];
    }
}
